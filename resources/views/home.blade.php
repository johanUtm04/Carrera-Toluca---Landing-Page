<x-layouts.app>
    <section class="seccion-hero">
        <div class="hero-fondo-animado"></div>
        <div class="hero-contenedor">
            
            <div class="hero-bloque-texto animate-izquierda">
                <span class="etiqueta-subtitulo">MODERNO | DISCIPLINA | ATLETISMO</span>
                <h1 class="hero-titulo">Tecnología &<br>Rendimiento<br>Running</h1>
                <p class="hero-descripcion">La 4ª edición de la carrera que desafía tu resistencia, tu disciplina y tu mentalidad en el asfalto urbano.</p>
                <button id="btn-registrarme" class="boton-accion">Convocatoria Oficial »</button>
            </div>

            <div class="hero-bloque-imagen animate-derecha">
                <img src="{{ asset('images/runner.png') }}" class="imagen-atleta" alt="Atleta Corporación Azul">
            </div>

        </div>
    </section>

    <section id="detalles" class="seccion-servicios">
        <div class="servicios-contenedor">
            
            <div class="servicios-cuadrilla">
                
                <div class="tarjeta-servicio">
                    <div class="tarjeta-icono-contenedor">
                        <img src="{{ asset('images/zapatilla.png') }}" alt="Icono Zapatilla" class="tarjeta-icono-img" style="width: 32px; height: auto; object-fit: contain;">
                    </div>
                    <h3 class="tarjeta-titulo">PERIODO DE INSCRIPCIÓN</h3>
                    <p class="tarjeta-texto">Del 01 de junio al 31 de julio de 2026. Asegura tu lugar en los módulos oficiales.</p>
                    <a href="#" class="tarjeta-enlace">Leer más →</a>
                </div>

                <div class="tarjeta-servicio">
                    <div class="tarjeta-icono-contenedor">
                        <img src="{{ asset('images/silbato.png') }}" alt="Icono Silbato" class="tarjeta-icono-img" style="width: 32px; height: auto; object-fit: contain;">
                    </div>
                    <h3 class="tarjeta-titulo">CATEGORÍAS LIBRES</h3>
                    <p class="tarjeta-texto">Abierto al público general en ramas Varonil y Femenil para distancias de 5K y 10K.</p>
                    <a href="#" class="tarjeta-enlace">Leer más →</a>
                </div>

            <div class="tarjeta-servicio">
                <div class="tarjeta-icono-contenedor">
                    <img src="{{ asset('images/relog.png') }}" alt="Icono Reloj" class="tarjeta-icono-img" style="width: 32px; height: auto; object-fit: contain;">
                </div>
                <h3 class="tarjeta-titulo">CRONOMETRAJE CHIP</h3>
                <p class="tarjeta-texto">Monitoreo electrónico de alta precisión para conocer tu tiempo exacto de carrera.</p>
                <a href="#" class="tarjeta-enlace">Leer más →</a>
            </div>

            </div>

            <div class="servicios-destacado-rojo">
                <h2 class="destacado-titulo">Más de<br><strong>800 Atletas</strong><br>En la Meta</h2>
            </div>

        </div>
    </section>

    <section class="seccion-video">
        <div class="video-capa-oscura"></div>
        <div class="video-contenido">
            <div class="video-boton-pulso" id="abrir-video-modal">
                <div class="triangulo-play"></div>
            </div>
            <h2 class="video-titulo">AVALADO POR LAS MEJORES ORGANIZACIONES DEPORTIVAS</h2>
        </div>
    </section>

    <section class="seccion-detalles-kit">
        <div class="detalles-contenedor">
            
            <div class="detalles-col-texto">
                <span class="etiqueta-roja-mini">SOBRE EL EVENTO —</span>
                <h2 class="detalles-titulo-principal">Nuestros Beneficios de Alta Calidad</h2>
                <p class="detalles-parrafo-descriptivo">Cada kit está diseñado bajo estándares profesionales para que tu única preocupación sea romper tu propia marca personal en Toluca.</p>
                
                <ul class="lista-checks-atleta">
                    <li><span class="check-circulo">✓</span> Playera Oficial Dry-Fit Conmemorativa</li>
                    <li><span class="check-circulo">✓</span> Medalla de Finalista Metálica con Relieve</li>
                    <li><span class="check-circulo">✓</span> Kit de Recuperación Energética Completo</li>
                </ul>

                <div class="progreso-contenedor">
                    <div class="progreso-etiquetas">
                        <span>CUPO DE REGISTRO LLENO</span>
                        <span>80%</span>
                    </div>
                    <div class="progreso-barra-fondo">
                        <div class="progreso-barra-llenado" style="width: 80%;"></div>
                    </div>
                </div>

                <div class="perfil-director">
                    <div class="director-avatar">👤</div>
                    <div class="director-info">
                        <h4>MHON SMITH</h4>
                        <span>Director de Carrera - Toluca</span>
                    </div>
                    <button class="boton-leer-mas">Saber Más »</button>
                </div>
            </div>

        <div class="detalles-col-mosaico">
            <div class="mosaico-item item-imagen-1 efect-gota">
                <img src="{{ asset('images/runner.jpg') }}" alt="Beneficio Carrera 1" class="mosaico-img">
            </div>

            <div class="mosaico-item item-video-mini efect-gota">
                <img src="{{ asset('images/medalla.webp') }}" alt="Miniatura Video" class="mosaico-img">
                <div class="mini-play"></div>
            </div>

            <div class="mosaico-item item-cuadro-rojo efect-gota">
                <h3>4ª Edición<br><strong>Completada</strong></h3>
            </div>

            <div class="mosaico-item item-imagen-2 efect-gota">
                <img src="{{ asset('images/kit.png') }}" alt="Beneficio Carrera 2" class="mosaico-img">
            </div>
        </div>

        </div>
    </section>
</x-layouts.app>