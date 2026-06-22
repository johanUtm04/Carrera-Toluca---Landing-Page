<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Corporación Azul')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>

    @include('race/partials._navbar')

    @yield('content')

    @include('race/partials._footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')

</body>
</html>