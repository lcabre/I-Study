<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\Client;

class UserController extends Controller
{
    private $content;

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //'email' => 'required|email',
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 401);
        }

        $data = request()->only('email','password');

        User::create([
            'name' => '',
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $client = Client::where('password_client', 1)->first();

        $request->request->add([
            'grant_type'    => 'password',
            'client_id'     => $client->id,
            'client_secret' => $client->secret,
            'username'      => $data['email'],
            'password'      => $data['password'],
            'scope'         => null,
        ]);

        $proxy = Request::create(
            'oauth/token',
            'POST'
        );

        return Route::dispatch($proxy);

    }
}
