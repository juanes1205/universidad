<?php

namespace App\Http\Controllers;

use App\Models\AreaConocimiento;
use Illuminate\Http\Request;

class AreaConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AreaConocimiento::where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $areaConocimiento = new AreaConocimiento();
        $areaConocimiento-> area_conocimiento = $request -> area_conocimiento;
        $areaConocimiento->save();
        return $areaConocimiento;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AreaConocimiento  $areaConocimiento
     * @return \Illuminate\Http\Response
     */
    public function show(AreaConocimiento $areaConocimiento)
    {
        return $areaConocimiento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AreaConocimiento  $areaConocimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AreaConocimiento $areaConocimiento)
    {
        $areaConocimiento-> area_conocimiento = $request -> area_conocimiento;
        $areaConocimiento->save();
        return $areaConocimiento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AreaConocimiento  $areaConocimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(AreaConocimiento $areaConocimiento)
    {
        $areaConocimiento->estado = 0;
        $areaConocimiento->save();
        return $areaConocimiento;
    }
}
