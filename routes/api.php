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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/tipo_materias', App\Http\Controllers\TipoMateriaController::class);
Route::apiResource('/tipo_documentos', App\Http\Controllers\TipoDocumentoController::class);
Route::apiResource('/semestres', App\Http\Controllers\SemestreController::class);
Route::apiResource('/creditos', App\Http\Controllers\CreditoController::class);
Route::apiResource('/area_conocimientos', App\Http\Controllers\AreaConocimientoController::class);
Route::apiResource('/materias', App\Http\Controllers\MateriaController::class);
