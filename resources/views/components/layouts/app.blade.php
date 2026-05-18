<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '3ª Carrera 5K Toluca' }}</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar">
        <div class="nav-container">
            <img src="{{ asset('images/logoblanco.webp') }}" alt="Corporación Azul" class="logo">
            <nav>
                <a href="/">Inicio</a>
                <a href="#detalles">Detalles</a>
                <a href="#login" class="btn-login">Iniciar Sesión</a>
            </nav>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>