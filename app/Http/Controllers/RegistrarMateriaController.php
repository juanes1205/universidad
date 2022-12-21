<?php

namespace App\Http\Controllers;

use App\Models\RegistrarMateria;
use Illuminate\Http\Request;

class RegistrarMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegistrarMateria::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registrarMateria = new RegistrarMateria();
        $registrarMateria -> id_user = $request -> id_user;
        $registrarMateria -> id_materia = $request -> id_materia;
        $registrarMateria -> creditos = $request -> creditos;
        $registrarMateria -> save();
        return $registrarMateria;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrarMateria  $registrarMateria
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrarMateria $registrarMateria)
    {
        return $registrarMateria;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrarMateria  $registrarMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrarMateria $registrarMateria)
    {
        $registrarMateria -> id_user = $request -> id_user;
        $registrarMateria -> id_materia = $request -> id_materia;
        $registrarMateria -> creditos = $request -> creditos;
        $registrarMateria -> save();
        return $registrarMateria;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrarMateria  $registrarMateria
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrarMateria $registrarMateria)
    {
        $registrarMateria->estado = 0;
        $registrarMateria->save();
    }
}
