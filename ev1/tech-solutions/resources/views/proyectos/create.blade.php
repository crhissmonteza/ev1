<!DOCTYPE html>
<html>
<head>
    <title>Crear proyecto</title>
   
    <link rel="stylesheet" href="{{ asset('css/vistas.css') }}">
</head>
<body>
    <h1>Crear nuevo proyecto</h1>
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" placeholder="Fecha de Inicio" required>

        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" placeholder="Estado" required>

        <label for="responsable">Responsable:</label>
        <input type="text" id="responsable" name="responsable" placeholder="Responsable" required>

        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto" step="0.01" placeholder="Monto" required>

        <button type="submit" class="button button-secondary">Crear Proyecto</button>
    </form>

    <!-- Enlace para volver a la lista de proyectos -->
    <a href="{{ route('proyectos.index') }}" class="button">Volver a la lista</a>
</body>
</html>
