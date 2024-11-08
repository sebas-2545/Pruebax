@extends('layouts')

@section('title', 'Descripcion')

@section('content')
<div class="container my-4">
    <h2 class="mb-4">Niveles de Educación</h2>
    <a href="{{ route('NivelEducacion.create') }}" class="btn btn-primary mb-3">Nuevo Nivel de Educación</a>
    <table class="table table-striped" id="Nivel_edu">
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nivelesEducacion as $nivel)
                <tr>
                    <td>{{ $nivel->descripcion }}</td>
                    <td>
                        <a href="{{ route('NivelEducacion.edit', $nivel->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('NivelEducacion.destroy', $nivel->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Está seguro de que desea eliminar este departamento?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection