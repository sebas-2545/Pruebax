@extends('layouts')

@section('title', 'Crear Departamento')

@section('content')

<a href="{{ route('Departamento.index') }}"><button type="button" class="btn btn-cancel" id="cancelForm">regresar</button> </a>

<div id="createDepartmentForm" class="form-container">
    <h3>Crear Departamento</h3>
    <form action="{{ route('Departamento.update',$departamento->id ) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_departamento">Nombre del Departamento</label>
            <input type="text" id="nombre_departamento" name="nombre_departamento" value="{{$departamento->nombre_departamento}}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ciudad_departamento">Ciudad del Departamento</label>
            <input type="text" id="ciudad_departamento" name="ciudad_departamento" value="{{$departamento->ciudad_departamento}}"class="form-control" required>
        </div>
        <button type="submit" class="btn btn-submit">Guardar Departamento</button>
    </form>
</div>
@endsection