<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\PacientesController;

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
Route::get('/especialidade', [EspecialidadesController::class,'index']);
Route::post('/especialidade', [EspecialidadesController::class,'store']);
Route::put('/especialidade/{id}', [EspecialidadesController::class,'update']);
Route::delete('/especialidade/{id}', [EspecialidadesController::class,'destroy']);

Route::get('/medico', [MedicosController::class,'index']);
Route::post('/medico', [MedicosController::class,'store']);
Route::put('/medico/{id}', [MedicosController::class,'update']);
Route::delete('/medico/{id}', [MedicosController::class,'destroy']);

Route::get('/consulta', [ConsultasController::class,'index']);
Route::post('/consulta', [ConsultasController::class,'store']);
Route::put('/consulta/{id}', [ConsultasController::class,'update']);
Route::delete('/consulta/{id}', [ConsultasController::class,'destroy']);

Route::get('/paciente', [PacientesController::class,'index']);
Route::post('/paciente', [PacientesController::class,'store']);
Route::put('/paciente/{id}', [PacientesController::class,'update']);
Route::delete('/paciente/{id}', [PacientesController::class,'destroy']);