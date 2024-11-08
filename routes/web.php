<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\NivelEducacionController;
use App\Http\Controllers\Reporte;

Route::resource('Departamento', DepartamentoController::class);
Route::resource('Empleado', EmpleadoController::class);
Route::resource('NivelEducacion', NivelEducacionController::class);
Route::get('/', function () {
    return view('index');
});
Route::get('Reporte',[Reporte::class,'Reporte']);
