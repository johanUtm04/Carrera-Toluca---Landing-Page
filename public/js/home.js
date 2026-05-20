document.addEventListener("DOMContentLoaded", () => {
    // ==========================================
    // 1. CONTROL DE LA NAVBAR (SCROLL, BLUR Y ALTURA)
    // ==========================================
    const cabecera = document.querySelector(".cabecera-principal");
    if (cabecera) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 30) {
                cabecera.style.height = "75px";
                cabecera.style.background = "rgba(255, 255, 255, 0.95)";
                cabecera.style.backdropFilter = "blur(10px)";
                cabecera.style.boxShadow = "0 10px 40px rgba(10, 17, 34, 0.08)";
            } else {
                cabecera.style.height = "90px";
                cabecera.style.background = "#ffffff";
                cabecera.style.backdropFilter = "none";
                cabecera.style.boxShadow = "0 4px 20px rgba(0, 0, 0, 0.04)";
            }
        }, { passive: true });
    }

    // ==========================================
    // 2. INTERSECTION OBSERVER MULTI-ELEMENTOS (TU LÓGICA + AUTOMATIZACIÓN)
    // ==========================================
    const opciones = { threshold: 0.15, rootMargin: "0px 0px -50px 0px" };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("ejecutar-animacion");
                observer.unobserve(entry.target);
            }
        });
    }, opciones);

    // Inyectamos tus clases de animación dinámicas al vuelo sin romper nada
    const estiloClase = document.createElement("style");
    estiloClase.innerHTML = `
        /* Tu clase activa original respetada al 100% */
        .ejecutar-animacion { transform: translate(0, 0) !important; opacity: 1 !important; }
        
        /* Direcciones iniciales para la cascada */
        .animar-desde-abajo { transform: translateY(60px); opacity: 0; transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.8s ease; }
        .animar-desde-izq { transform: translateX(-60px); opacity: 0; transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.8s ease; }
    `;
    document.head.appendChild(estiloClase);

    // [Tu Lógica Original]: Cuadro del Footer / Sponsors Section
    const contenedorFooter = document.querySelector(".sponsors-section");
    if (contenedorFooter) {
        contenedorFooter.style.transform = "translateY(50px)";
        contenedorFooter.style.opacity = "0";
        contenedorFooter.style.transition = "transform 0.8s ease, opacity 0.8s ease";
        observer.observe(contenedorFooter);
    }

    // [Nueva Automatización]: Tarjetas de beneficios o cuadrículas en cascada secuencial
    const tarjetas = document.querySelectorAll(".tarjeta-servicio, .mosaico-item");
    tarjetas.forEach((tarjeta, index) => {
        tarjeta.classList.add("animar-desde-abajo");
        // Delay incremental para que se desplieguen una tras otra elegantemente
        tarjeta.style.transitionDelay = `${index * 0.1}s`;
        observer.observe(tarjeta);
    });

    // [Nueva Automatización]: Bloques de texto informativos laterales
    const bloquesTexto = document.querySelectorAll(".detalles-col-texto, .servicios-destacado-rojo");
    bloquesTexto.forEach(bloque => {
        bloque.classList.add("animar-desde-izq");
        observer.observe(bloque);
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const loader = document.getElementById("loader-global");

    // 1. Ocultar el loader con transicion fluida al terminar de cargar la pagina
    if (loader) {
        setTimeout(() => {
            loader.classList.add("loader-oculto");
        }, 200); // Pequeño delay de cortesía para estabilizar la UI
    }

    // 2. Activar el loader antes de salir de la página al dar clic en enlaces internos
    document.querySelectorAll("a").forEach(enlace => {
        enlace.addEventListener("click", (e) => {
            const url = enlace.getAttribute("href");

            // Filtrar que sea un enlace interno válido y no un ancla (#detalles), un javascript vacío, o target blank
            if (url && !url.startsWith("#") && !url.startsWith("javascript:") && !enlace.getAttribute("target")) {
                // Verificar que no sea el mismo enlace actual
                if (enlace.hostname === window.location.hostname) {
                    loader.classList.remove("loader-oculto");
                }
            }
        });
    });
});