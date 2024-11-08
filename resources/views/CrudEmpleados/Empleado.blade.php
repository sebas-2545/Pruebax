@extends('layouts')

@section('title', 'Empleado')

@section('content')
<div class="container-empleados">
    <h2 class="encabezado-empleados">Lista de Empleados</h2>
    <a href="{{ route('Empleado.create') }}" class="boton boton-primario">Nuevo Empleado</a>
    <table class="tabla-empleados" id="tablaEmpleados">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Departamento</th>
                <th>Salario</th>
                <th>Nivel de Educación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleado as $empleado)
                <tr>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->departamento->nombre_departamento ?? 'N/A' }}</td>
                    <td>{{ $empleado->salario }}</td>
                    <td>{{ $empleado->nivelEducacion->descripcion ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('Empleado.edit', $empleado->id) }}" class="boton boton-editar">Editar</a>
                        <form action="{{ route('Empleado.destroy', $empleado->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="boton boton-eliminar" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection