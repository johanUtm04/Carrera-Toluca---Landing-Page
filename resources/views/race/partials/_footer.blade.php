<footer class="site-footer">
    <div class="site-footer-container">

        <div class="site-footer-brand">
            <img
                src="{{ asset('images/imgExample.png') }}"
                alt="La Gran Ciudad Departamental"
                class="site-footer-logo"
            >

            <p class="site-footer-description">
                Carrera La Gran Ciudad, un evento deportivo con causa para toda la comunidad.
            </p>
        </div>

        <div class="site-footer-info">
            <p class="site-footer-copyright">
                © {{ date('Y') }} Tienda Departamental La Gran Ciudad.
                Todos los derechos reservados.
            </p>

            <p class="site-footer-developer">
                Sitio web desarrollado por
                <a href="#" target="_blank" rel="noopener noreferrer">
                    WebMonkey
                </a>
            </p>
        </div>

        <div class="site-footer-visits">
            <span class="site-footer-visits-label">
                Eres el visitante
            </span>

            <strong class="site-footer-visits-number">
                {{ number_format($visits ?? 41864) }}
            </strong>
        </div>

    </div>
</footer>