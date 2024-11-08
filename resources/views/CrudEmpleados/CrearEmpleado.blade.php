@extends('layouts')

@section('title', 'Empleado')

@section('content')
    <div class="formulario-empleado">
        <h2 class="titulo-formulario">Crear Nuevo Empleado</h2>
        <form action="{{ route('Empleado.store') }}" method="POST">
            @csrf
            <div class="campo">
                <label for="nombre" class="etiqueta-campo">Nombre</label>
                <input type="text" class="entrada-texto" id="nombre" name="nombre" required>
            </div>
    
            <div class="campo">
                <label for="apellido" class="etiqueta-campo">Apellido</label>
                <input type="text" class="entrada-texto" id="apellido" name="apellido" required>
            </div>
    
            <div class="campo">
                <label for="id_departamento" class="etiqueta-campo">Departamento</label>
                <select class="entrada-seleccion" id="id_departamento" name="id_departamento" required>
                    <option value="">Seleccione un departamento</option>
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">{{ $departamento->nombre_departamento }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="campo">
                <label for="salario" class="etiqueta-campo">Salario</label>
                <input type="number" class="entrada-texto" id="salario" name="salario" required>
            </div>
    
            <div class="campo">
                <label for="id_niveleducacion" class="etiqueta-campo">Nivel de Educación</label>
                <select class="entrada-seleccion" id="id_niveleducacion" name="id_niveleducacion" required>
                    <option value="">Seleccione un nivel de educación</option>
                    @foreach($nivelesEducacion as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->descripcion }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="contenedor-botones">
                <button type="submit" class="boton-formulario boton-guardar">Guardar</button>
                <a href="{{ route('Empleado.index') }}" class="boton-formulario boton-volver">Volver</a>
            </div>
        </form>
    </div>

@endsection