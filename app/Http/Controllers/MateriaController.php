<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Materia::where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Materia();
        $materia -> materia = $request -> materia;
        $materia -> id_credito = $request -> id_credito;
        $materia -> id_area = $request -> id_area;
        $materia -> id_tipo_materia = $request -> id_tipo_materia;
        $materia -> id_user = $request -> id_user;
        $materia -> save();
        return $materia;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        return $materia;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $materia -> materia = $request -> materia;
        $materia -> id_credito = $request -> id_credito;
        $materia -> id_area = $request -> id_area;
        $materia -> id_tipo_materia = $request -> id_tipo_materia;
        $materia -> id_user = $request -> id_user;
        $materia -> save();
        return $materia;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->estado = 0;
        $materia->save();
    }
}
