@extends('layouts')

@section('title', 'Reporte')
@push('styles')
@endpush
@section('content')



    <h2 class="mb-4">Reporte de Empleados</h2>
    <table id="reporteTable" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nivel de Educación</th>
                <th>Departamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reporte as $row)
            <tr>
                <td>{{ $row->nombre }}</td>
                <td>{{ $row->apellido }}</td>
                <td>{{ $row->descripcion }}</td>
                <td>{{ $row->nombre_departamento }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection