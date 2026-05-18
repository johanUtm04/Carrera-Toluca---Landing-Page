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
                    <strong>5K</strong>
                    <span>Distancia</span>
                </div>
                <div>
                    <strong>2026</strong>
                    <span>Edición</span>
                </div>
                <div>
                    <strong>+800</strong>
                    <span>Corredores</span>
                </div>
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
                <p>Tecnología Dry-Fit premium con el diseño conmemorativo de la 3ª edición.</p>
            </div>
            <div class="kit-card">
                <div class="kit-icon">🏅</div>
                <h3>Medalla de Finalista</h3>
                <p>Metálica, con relieve exclusivo para todos los que crucen la meta.</p>
            </div>
            <div class="kit-card">
                <div class="kit-icon">⏱️</div>
                <h3>Chip de Cronometraje</h3>
                <p>Monitoreo electrónico en tiempo real para conocer tu tiempo exacto.</p>
            </div>
            <div class="kit-card">
                <div class="kit-icon">🍎</div>
                <h3>Kit de Recuperación</h3>
                <p>Hidratación completa y zona de fruta/masajes en la línea de meta.</p>
            </div>
        </div>
    </section>

    <section id="recorrido" class="route-section">
        <div class="route-container">
            <div class="route-info">
                <span class="mini-tag">EL CIRCUITO</span>
                <h2>Ruta Oficial 5K Toluca</h2>
                <p>Un trazado plano e histórico diseñado para romper tus mejores marcas personales. Salida y meta frente al Palacio Municipal.</p>
                <div class="route-tabs">
                    <button class="tab-btn active" data-target="salida">📍 Salida / Meta</button>
                    <button class="tab-btn" data-target="puntos">💧 Hidratación</button>
                </div>
                <div class="tab-content active" id="salida">
                    <h4>Palacio Municipal de Toluca</h4>
                    <p>Comenzamos en el corazón de la ciudad. Zona de calentamiento abierta desde las 6:30 AM. Disparo de salida puntual a las 7:30 AM.</p>
                </div>
                <div class="tab-content" id="puntos">
                    <h4>Puntos de Abastecimiento</h4>
                    <p>Estaciones de agua y asistencia médica ubicadas en el Kilómetro 2.5 y en la zona de meta para garantizar tu seguridad.</p>
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

    <section class="faq-section">
        <div class="section-title">
            <span class="mini-tag">DUDAS</span>
            <h2>Preguntas Frecuentes</h2>
        </div>
        <div class="faq-accordion">
            <div class="faq-item">
                <button class="faq-question">¿Cuándo y dónde se recogen los kits? <span>+</span></button>
                <div class="faq-answer">
                    <p>La entrega de kits se realizará el sábado 30 de Agosto de 9:00 AM a 5:00 PM en las oficinas centrales de Corporación Azul. No olvides presentar tu comprobante de pago impreso y tu identificación oficial.</p>
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