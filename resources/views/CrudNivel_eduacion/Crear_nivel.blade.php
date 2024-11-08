@extends('layouts')

@section('title', 'Crear Nivel ')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

<div class="container my-4">
    <h2 class="mb-4">Crear Nuevo Nivel de Educación</h2>
    <form action="{{ route('NivelEducacion.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('NivelEducacion.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

@endsection