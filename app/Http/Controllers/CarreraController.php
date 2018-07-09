<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Materia;
use Auth;
use Illuminate\Http\Request;
use Storage;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        $carreras = $usuario->carreras;

        $carreras = $carreras->map(function ($user) {
            return collect($user->toArray())
                ->except(['pivot'])
                ->all();
        });

        if(!count($carreras))
            return response()->json(null, 204);
        else
            return $carreras;
    }

    public function listaCarreras()
    {
        $carreras = Carrera::all();

        if(!count($carreras))
            return response()->json(null, 204);
        else
            return $carreras;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function join($id_carrera)
    {
        $usuario = Auth::user();
        $carrera = Carrera::find($id_carrera);

        if($carrera){

            $usuario->carreras()->attach($carrera);

            $materias = Materia::whereHas("carrera", function ($query) use ($id_carrera){
                $query->where("id", $id_carrera);
            })->pluck("id");

            $usuario->materias()->attach($materias);

            $usuario->save();

        }else
            return response()->json(null, 202);

        return response()->json(null, 204);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrera $carrera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        //
    }
}
