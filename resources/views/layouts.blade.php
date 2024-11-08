<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sistema de Empleados')</title>

    <!-- Estilos comunes -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/reporte.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/departamento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Nivel_educa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/empleado.css') }}">

    <!-- Scripts data tables -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

  <!-- Scripts comunes -->

  <script src="{{ asset('js/empleado.js')}}"></script>

  <script src="{{ asset('js/departamento.js')}}"></script>
  <script src="{{ asset('js/Niveleducacion.js')}}"></script>
  <script src="{{ asset('js/Reporte.js')}}"></script>
</head>
<body>
    <div class="container">
        <h1>Sistema de Empleados</h1>
        <!-- Enlaces para navegar -->
        <div class="links">
            <a href="{{ route('Empleado.index')   }}">Gestionar Empleados</a>
            <a href="{{ route('Departamento.index') }}">Gestionar Departamentos</a>
            <a href="{{ route('NivelEducacion.index') }}">Gestionar Niveles Educativos</a>
            <a href="{{ url('/Reporte') }}">Ver Reporte</a>
        </div>
    </div>
    <div class="departa">

    <!-- Incluir el contenido específico de cada vista -->
    @yield('content')

   </div>
</body>
</html>
