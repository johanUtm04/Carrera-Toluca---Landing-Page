<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '4ª Carrera 5K Toluca - Corporación Azul' }}</title>
    
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="cuerpo-corporativo">

    <header class="cabecera-principal">
        <div class="cabecera-contenedor">
            
            <a href="/" class="cabecera-logo-enlace">
                <img src="{{ asset('images/logoAzul.webp') }}" alt="Corporación Azul" class="cabecera-logo">
            </a>
            
            <nav class="menu-navegacion">
                <div class="menu-item con-dropdown">
                    <a href="/" class="menu-enlace activo">Inicio <span class="flecha-menu">▼</span></a>
                    <div class="menu-dropdown">
                        <a href="#detalles">Convocatoria</a>
                        <a href="#recorrido">Circuito Toluca</a>
                        <a href="#faq">Reglamento 2026</a>
                    </div>
                </div>

                <div class="menu-item">
                    <a href="#detalles" class="menu-enlace">Detalles</a>
                </div>

                <div class="menu-item con-dropdown">
                    <a href="#" class="menu-enlace">Corredores <span class="flecha-menu">▼</span></a>
                    <div class="menu-dropdown">
                        <a href="/login">Mi Panel de Atleta</a>
                        <a href="#detalles">Tiempos y Chips</a>
                    </div>
                </div>

                <div class="menu-item">
                    <a href="#recorrido" class="menu-enlace">Recorrido</a>
                </div>

                <div class="menu-item">
                    <a href="#faq" class="menu-enlace">Preguntas</a>
                </div>
            </nav>

            <div class="cabecera-acciones">
                <a href="/login" class="boton-registro-nav">
                    Iniciar Sesión <span class="icono-flecha-nav">»</span>
                </a>
            </div>

        </div>
    </header>

    <main class="contenedor-principal">
        {{ $slot }}
    </main>

    <footer class="pie-pagina-premium">
        <div class="footer-contenedor">
            
<div class="footer-columna col-marca">
    <img src="{{ asset('images/logoblanco.webp') }}" alt="Corporación Azul Logo" class="footer-logo" style="height: 65px; width: auto; object-fit: contain; margin-bottom: 25px;">
    <p class="footer-descriptivo" style="margin-bottom: 30px;">
        Impulsando el deporte, la disciplina y la máxima tecnología en control electrónico de running en Toluca.
    </p>
    <div class="footer-redes" style="display: flex; align-items: center; gap: 18px;">
        <a href="#" class="red-icono" style="width: 52px; height: 52px; display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('images/facebook.png') }}" alt="Facebook" style="width: 26px; height: 26px; object-fit: contain;">
        </a>
        <a href="#" class="red-icono" style="width: 52px; height: 52px; display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="width: 26px; height: 26px; object-fit: contain;">
        </a>
        <a href="#" class="red-icono" style="width: 52px; height: 52px; display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('images/tik-tok.png') }}" alt="TikTok" style="width: 26px; height: 26px; object-fit: contain;">
        </a>
    </div>
</div>

            <div class="footer-columna">
                <h4 class="footer-titulo-col">Competencia</h4>
                <ul class="footer-enlaces">
                    <li><a href="/">Convocatoria</a></li>
                    <li><a href="/#beneficios">Beneficios Kit</a></li>
                    <li><a href="/register">Inscripciones</a></li>
                </ul>
            </div>

            <div class="footer-columna">
                <h4 class="footer-titulo-col">Soporte</h4>
                <ul class="footer-enlaces">
                    <li><a href="/login">Portal Atleta</a></li>
                    <li><a href="#">Reglamento</a></li>
                    <li><a href="#">Privacidad</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-barra-creditos">
            <div class="creditos-contenido">
                <p>&copy; {{ date('Y') }} Corporación Azul. Todos los derechos reservados.</p>
                <p class="firma-plantilla">Designed via <strong>-Johan landing 2026-</strong></p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
</body>

<div id="loader-global" class="loader-global">
    <div class="loader-contenido">
        <div class="loader-barra-progreso"></div>
        <span class="loader-texto-marca">CORPORACIÓN AZUL</span>
    </div>
</div>

</html>