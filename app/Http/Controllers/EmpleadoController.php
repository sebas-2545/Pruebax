<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\NivelEducacion;
use App\Models\Departamento;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleado = Empleado::all();
        return view('CrudEmpleados.Empleado', compact('empleado'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nivelesEducacion = NivelEducacion::all();
        $departamentos = Departamento::all();
        return view('CrudEmpleados.CrearEmpleado', compact('nivelesEducacion','departamentos' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'id_departamento' => 'required|exists:ds_departamento,id',
            'salario' => 'required|numeric',
            'id_niveleducacion' => 'required|exists:ds_niveleducacion,id',
        ]);
        $Empleado = new Empleado();
        $Empleado->nombre = $request->input('nombre');
        $Empleado->apellido = $request->input('apellido');
        $Empleado->id_departamento = $request->input('id_departamento');
        $Empleado->salario = $request->input('salario');
        $Empleado->id_niveleducacion = $request->input('id_niveleducacion');

        $Empleado->save();
       

        return redirect()->route('Empleado.index')->with('success', 'Empleado creado exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nivelesEducacion = NivelEducacion::all();
        $departamentos = Departamento::all();
        $Empleado = Empleado::findOrFail($id);
        return view('CrudEmpleados.EditarEmpleado', compact('Empleado','nivelesEducacion','departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'id_departamento' => 'required|exists:ds_departamento,id',
            'salario' => 'required|numeric',
            'id_niveleducacion' => 'required|exists:ds_niveleducacion,id',
        ]);
        $Empleado =  Empleado::findOrFail($id);
        $Empleado->nombre = $request->input('nombre');
        $Empleado->apellido = $request->input('apellido');
        $Empleado->id_departamento = $request->input('id_departamento');
        $Empleado->salario = $request->input('salario');
        $Empleado->id_niveleducacion = $request->input('id_niveleducacion');

        $Empleado->save();
       

        return redirect()->route('Empleado.index')->with('success', 'Empleado editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar el empleado  por su ID y eliminarlo
    $Empleado = Empleado::find($id); 
    $Empleado->delete();
    return  redirect()->route('Empleado.index');
    }
}
