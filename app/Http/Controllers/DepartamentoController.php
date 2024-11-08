<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamento = Departamento::all();
       return view('CrudDepartamento.Departamento', compact('departamento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CrudDepartamento.CrearDp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_departamento' => 'required|string|max:200',
            'ciudad_departamento' => 'required|string|max:200',
        ]);
        $departamento = new Departamento();
        $departamento->nombre_departamento = $request->input('nombre_departamento');
        $departamento->ciudad_departamento = $request->input('ciudad_departamento');
        $departamento->save();
        return  redirect()->route('Departamento.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('CrudDepartamento.EditDep', compact('departamento'));
       
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_departamento' => 'required|string|max:200',
            'ciudad_departamento' => 'required|string|max:200',
        ]);
        $departamento = Departamento::findOrFail($id);
        $departamento->nombre_departamento = $request->input('nombre_departamento');
        $departamento->ciudad_departamento = $request->input('ciudad_departamento');
        $departamento->save();
        return  redirect()->route('Departamento.index');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
           

    // Buscar el Departamento  por su ID y eliminarlo
    $aso = Departamento::find($id); 
    $aso->delete();
    return  redirect()->route('Departamento.index');
   
    }
}
