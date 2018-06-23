<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');

Route::middleware(['auth:api'])->group(function () {
    Route::get('carreras/', 'CarreraController@index')->name('carreras.list');
    Route::get('carreras/{id_carrera}/join', 'CarreraController@join')->name('carreras.join');
    Route::get('carreras/{id_carrera}/materias', 'MateriaController@join')->name('materias.list');

});