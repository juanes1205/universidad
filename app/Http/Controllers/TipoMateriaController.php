<?php

namespace App\Http\Controllers;

use App\Models\TipoMateria;
use Illuminate\Http\Request;

class TipoMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TipoMateria::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoMateria = new TipoMateria();
        $tipoMateria-> tipo_materia = $request -> tipo_materia;
        $tipoMateria->save();
        return $tipoMateria;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoMateria  $tipoMateria
     * @return \Illuminate\Http\Response
     */
    public function show(TipoMateria $tipoMateria)
    {
        return $tipoMateria;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoMateria  $tipoMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoMateria $tipoMateria)
    {
        $tipoMateria-> tipo_materia = $request -> tipo_materia;
        $tipoMateria-> estado = $request -> estado;
        $tipoMateria->save();
        return $tipoMateria;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoMateria  $tipoMateria
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoMateria $tipoMateria)
    {
        $tipoMateria->estado = 0;
        $tipoMateria->save();
        return $tipoMateria;
    }
}
