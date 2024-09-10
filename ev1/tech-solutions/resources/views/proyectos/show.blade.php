<!DOCTYPE html>
<html>
<head>
    <title>Detalles del proyecto</title>
    <link rel="stylesheet" href="{{ asset('css/vistas.css') }}">
</head>
<body>
    <h1>Detalles del proyecto</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <div>
        <h2>Nombre: {{ $proyecto->nombre }}</h2>
        <p><strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_inicio }}</p>
        <p><strong>Estado:</strong> {{ $proyecto->estado }}</p>
        <p><strong>Responsable:</strong> {{ $proyecto->responsable }}</p>
        <p><strong>Monto:</strong> {{ number_format($proyecto->monto, 2) }}</p>
    </div>

    <div>
        <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="button button-secondary">Editar</a>

        <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="button button-warning">Eliminar</button>
        </form>

        <a href="{{ route('proyectos.index') }}"class="button">Volver a la lista</a>
    </div>
</body>
</html>
