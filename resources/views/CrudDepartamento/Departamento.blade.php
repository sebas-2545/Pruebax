@extends('layouts')

@section('title', 'Lista de Departamentos')

@section('content')
  
    <!-- Botón para crear un nuevo departamento -->
   <a href="{{ route('Departamento.create') }}"><button id="createDepartment" class="btn">Crear Departamento</button></a> 

    <table id="departmentsTable" class="display">
        <thead>
            <tr>
                <th>Nombre del Departamento</th>
                <th>Ciudad del Departamento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departamento as $dp)
            <tr>
                <td>{{ $dp->nombre_departamento }}</td>
                <td>{{ $dp->ciudad_departamento }}</td>
                <td>
                    <a href="{{ route('Departamento.edit', $dp->id) }} "><button class="btn-edit">Editar</button></a>
                    <form action="{{ route('Departamento.destroy', $dp->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Está seguro de que desea eliminar este departamento?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection
