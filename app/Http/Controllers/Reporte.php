<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reporte extends Controller
{
    public function Reporte (){

    $reporte = DB::select("
        SELECT  ds_empleado.nombre, ds_empleado.apellido, ds_niveleducacion.descripcion,ds_departamento.nombre_departamento
        FROM ds_empleado
        JOIN ds_departamento ON ds_empleado.id_departamento = ds_departamento.id
        JOIN ds_niveleducacion ON ds_empleado.id_niveleducacion = ds_niveleducacion.id
        WHERE ds_empleado.id_departamento IN (
            SELECT id_departamento 
            FROM ds_empleado 
            GROUP BY id_departamento 
            HAVING SUM(salario) > 250000
        )
        ORDER BY ds_empleado.apellido
    ");
    return view('verReporte.Reporte', compact('reporte'));
    }
}
