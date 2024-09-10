<!DOCTYPE html>
<html>
<head>
    <title>Editar proyecto</title>
    <link rel="stylesheet" href="{{ asset('css/vistas.css') }}">
</head>
<body>
    <h1>Editar proyecto</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $proyecto->nombre) }}" required>
            @error('nombre')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $proyecto->fecha_inicio ? $proyecto->fecha_inicio->format('Y-m-d') : '') }}" required>
            @error('fecha_inicio')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" value="{{ old('estado', $proyecto->estado) }}" required>
            @error('estado')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="responsable">Responsable:</label>
            <input type="text" id="responsable" name="responsable" value="{{ old('responsable', $proyecto->responsable) }}" required>
            @error('responsable')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="monto">Monto:</label>
            <input type="number" id="monto" name="monto" step="0.01" value="{{ old('monto', $proyecto->monto) }}" required>
            @error('monto')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="button button-secondary">Actualizar Proyecto</button>
    </form>

    <a href="{{ route('proyectos.index') }}" class="button">Volver a la lista</a>
</body>
</html>
