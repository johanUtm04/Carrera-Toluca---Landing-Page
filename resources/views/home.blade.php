<x-layouts.app>
    <section class="hero">
        <div class="overlay"></div>
        <img src="{{ asset('images/runner.png') }}" class="runner" alt="Corredor Toluca">
        <div class="hero-content">
            <span class="mini-tag">TOLUCA 2026</span>
            <h1>CORRE<br>MÁS LEJOS</h1>
            <p>La carrera que desafía tu resistencia, tu disciplina y tu mentalidad.</p>
            <div class="hero-buttons">
                <button id="btn-registrarme">Registrarme</button>
                <a href="#recorrido" id="btn-ver-recorrido">Ver recorrido</a>
            </div>
            <div class="hero-stats">
                <div>
                    <strong>5K / 10K</strong>
                    <span>Distancias</span>
                </div>
                <div>
                    <strong>4ª Edición</strong>
                    <span>Cruz Azul 2026</span>
                </div>
                <div>
                    <strong>+800</strong>
                    <span>Corredores</span>
                </div>
            </div>
        </div>
    </section>

    <section id="detalles" class="details-section">
        <div class="section-title">
            <span class="mini-tag">CONVOCATORIA</span>
            <h2>Detalles del Evento</h2>
        </div>
        <div class="details-grid">
            <div class="details-card">
                <div class="details-icon">📅</div>
                <h3>Inscripciones</h3>
                <p><strong>Periodo:</strong> Del 01 de junio al 31 de julio de 2026.</p>
                <p><strong>Costo por participante:</strong> Por definir</p>
                <p><strong>Centros de inscripción:</strong> Próximamente disponibles</p>
            </div>
            <div class="details-card">
                <div class="details-icon">🏃‍♂️</div>
                <h3>Categorías Libres</h3>
                <p>Abierto al público en general en ambas ramas:</p>
                <ul class="categories-list">
                    <li>⚡ Varonil 5 km / 10 km</li>
                    <li>⚡ Femenil 5 km / 10 km</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="kit-section">
        <div class="section-title">
            <span class="mini-tag">PREPÁRATE</span>
            <h2>¿Qué incluye tu inscripción?</h2>
        </div>
        <div class="kit-grid">
            <div class="kit-card">
                <div class="kit-icon">🎽</div>
                <h3>Playera Oficial</h3>
                <p>Tecnología Dry-Fit con el diseño conmemorativo exclusivo de la 4ª edición Cruz Azul.</p>
            </div>
            <div class="kit-card">
                <div class="kit-icon">🏅</div>
                <h3>Medalla de Finalista</h3>
                <p>Metálica, con relieve exclusivo para todos los que crucen la meta oficial.</p>
            </div>
            <div class="kit-card">
                <div class="kit-icon">⏱️</div>
                <h3>Chip de Cronometraje</h3>
                <p>Monitoreo electrónico de alta precisión para conocer tu tiempo exacto de carrera.</p>
            </div>
            <div class="kit-card">
                <div class="kit-icon">🍎</div>
                <h3>Kit de Recuperación</h3>
                <p>Paquete de hidratación energética, fruta y asistencia en zona de meta.</p>
            </div>
        </div>
    </section>

    <section id="recorrido" class="route-section">
        <div class="route-container">
            <div class="route-info">
                <span class="mini-tag">EL CIRCUITO</span>
                <h2>Ruta e Información Oficial</h2>
                <p>Un trazado urbano e histórico diseñado para romper tus mejores marcas personales.</p>
                
                <div class="route-tabs">
                    <button class="tab-btn active" data-target="salida">📍 Ubicación</button>
                    <button class="tab-btn" data-target="puntos">⏱️ Horarios</button>
                </div>
                
                <div class="tab-content active" id="salida">
                    <h4>Plaza Principal del Centro de Toluca</h4>
                    <p><strong>Dirección:</strong> Av. Independencia Manzana 010, Centro, 50000 Toluca de Lerdo, Méx.</p>
                    <p>Zona de salida y meta ubicada frente al corazón del Centro Histórico.</p>
                </div>
                
                <div class="tab-content" id="puntos">
                    <h4>Horarios de Competencia</h4>
                    <p><strong>Fecha:</strong> Domingo 23 de agosto de 2026.</p>
                    <p><strong>Disparo de Salida:</strong> 08:00 AM en punto.</p>
                    <p>Se recomienda llegar con 45 minutos de anticipación para bloque de calentamiento.</p>
                </div>
            </div>
            <div class="route-visual">
                <div class="map-placeholder">
                    <div class="map-pulse"></div>
                    <span>[ MAPA DEL CIRCUITO INTERACTIVO ]</span>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq-section">
        <div class="section-title">
            <span class="mini-tag">DUDAS</span>
            <h2>Preguntas Frecuentes y Reglamento</h2>
        </div>
        <div class="faq-accordion">
            <div class="faq-item">
                <button class="faq-question">¿Cuál es el reglamento básico de participación? <span>+</span></button>
                <div class="faq-answer">
                    <p>El reglamento oficial detallado se publicará próximamente. Los lineamientos base estipulan el uso obligatorio del número de competidor al frente, comportamiento deportivo estricto y respetar el trazado oficial de los jueces.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">¿Cuándo y dónde se recogen los kits? <span>+</span></button>
                <div class="faq-answer">
                    <p>La entrega de kits se realizará el sábado previo a la carrera (Sábado 22 de agosto de 2026). El horario tentativo y lugar oficial se confirmarán por correo a los inscritos.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">¿Hay estacionamiento disponible el día del evento? <span>+</span></button>
                <div class="faq-answer">
                    <p>Sí, habrá convenios con los estacionamientos subterráneos de la zona centro de Toluca con tarifa preferencial para corredores mostrando su número de competidor.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">¿Puedo transferir mi inscripción a otra persona? <span>+</span></button>
                <div class="faq-answer">
                    <p>Por motivos de logística, cronometraje y seguros médicos, las inscripciones son estrictamente personales e intransferibles una vez asignado tu número de competidor.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsors-section">
        <div class="sponsors-container">
            <img src="{{ asset('images/cruzAzul-logo.png') }}" alt="Cruz Azul">
            <img src="{{ asset('images/cemix.webp') }}" alt="Cemix">
            <img src="{{ asset('images/sika.png') }}" alt="Sika">
            <img src="{{ asset('images/perdura.webp') }}" alt="Perdura">
        </div>
    </section>
</x-layouts.app>