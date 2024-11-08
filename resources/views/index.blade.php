<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Sistema de Empleados</title>
   
</head>
<body>
    <div class="container">
        <h1>Sistema de Empleados</h1>
        <p>Bienvenido al sistema de gestión de empleados. Aquí puedes administrar la información de los empleados</p>
        
        <a href="{{ url('/Reporte') }}"  class="btn">Ver Reporte</a>
        <div class="links">
            <a href="{{ route('Departamento.index') }}">Gestionar Departamentos</a>
            <a href="{{ route('NivelEducacion.index') }}">Gestionar NivelesEducativos</a>
        
            <a href="{{ route('Empleado.index') }}">Gestionar Empleados</a>
        </div>
    </div>
</body>
</html>
