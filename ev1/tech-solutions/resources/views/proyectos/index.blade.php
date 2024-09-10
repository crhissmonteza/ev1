<!DOCTYPE html>
<html>
<head>
    <title>Lista de proyectos</title>
    <link rel="stylesheet" href="{{ asset('css/vistas.css') }}">
</head>
<body>
    <h1>Lista de proyectos</h1>
    <a href="{{ route('proyectos.create') }}" class="button button-primary">Crear nuevo proyecto</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <ul>
        @foreach($proyectos as $proyecto)
            <li>
            <div class="list-item-container">
                <a href="{{ route('proyectos.show', $proyecto->id) }}" class="button">{{ $proyecto->nombre }}</a>
                <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="button button-secondary">Editar</a>
                <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button button-warning">Eliminar</button>
                </form>
</div>
            </li>
        @endforeach
    </ul>
</body>
</html>
