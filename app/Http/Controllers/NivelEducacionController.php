<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NivelEducacion;
class NivelEducacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $nivelesEducacion = NivelEducacion::all();
    return view('CrudNivel_eduacion.Nivel_educacion', compact('nivelesEducacion'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CrudNivel_eduacion.Crear_nivel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
        $NivelEducacion = new NivelEducacion();
        $NivelEducacion->descripcion = $request->input('descripcion');
        $NivelEducacion->save();
        return  redirect()->route('NivelEducacion.index');
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

        $NivelEducacion = NivelEducacion::findOrFail($id);
        return view('CrudNivel_eduacion.editar_nivel', compact('NivelEducacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //ACTULIZAR  NIVEL DE EDUCACION
        $NivelEducacion = NivelEducacion::findOrFail($id);
        $NivelEducacion->descripcion = $request->input('descripcion');
        $NivelEducacion->save();
        return  redirect()->route('NivelEducacion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    // Buscar el NivelEducacion  por su ID y eliminarlo
    $NivelEducacion = NivelEducacion::find($id); 
    $NivelEducacion->delete();
    return  redirect()->route('NivelEducacion.index');
    }
}
