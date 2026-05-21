document.addEventListener("DOMContentLoaded", () => {
    const cabecera = document.querySelector(".cabecera-principal");
    const loader = document.getElementById("loader-global");
    const contenedorFooter = document.querySelector(".sponsors-section");
    const tarjetas = document.querySelectorAll(".tarjeta-servicio, .mosaico-item");
    const bloquesTexto = document.querySelectorAll(".detalles-col-texto, .servicios-destacado-rojo");
    const opciones = { threshold: 0.15, rootMargin: "0px 0px -50px 0px" };

    if (loader) {
        setTimeout(() => {
            loader.classList.add("loader-oculto");
        }, 200);
    }

    document.querySelectorAll("a").forEach(enlace => {
        enlace.addEventListener("click", (e) => {
            const url = enlace.getAttribute("href");
            if (url && !url.startsWith("#") && !url.startsWith("javascript:") && !enlace.getAttribute("target")) {
                if (enlace.hostname === window.location.hostname) {
                    if (loader) loader.classList.remove("loader-oculto");
                }
            }
        });
    });

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

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("ejecutar-animacion");
                observer.unobserve(entry.target);
            }
        });
    }, opciones);

    const estiloClase = document.createElement("style");
    estiloClase.innerHTML = ".ejecutar-animacion { transform: translate(0, 0) !important; opacity: 1 !important; } .animar-desde-abajo { transform: translateY(60px); opacity: 0; transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.8s ease; } .animar-desde-izq { transform: translateX(-60px); opacity: 0; transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.8s ease; }";
    document.head.appendChild(estiloClase);

    if (contenedorFooter) {
        contenedorFooter.style.transform = "translateY(50px)";
        contenedorFooter.style.opacity = "0";
        contenedorFooter.style.transition = "transform 0.8s ease, opacity 0.8s ease";
        observer.observe(contenedorFooter);
    }

    tarjetas.forEach((tarjeta, index) => {
        tarjeta.classList.add("animar-desde-abajo");
        tarjeta.style.transitionDelay = `${index * 0.1}s`;
        observer.observe(tarjeta);
    });

    bloquesTexto.forEach(bloque => {
        bloque.classList.add("animar-desde-izq");
        observer.observe(bloque);
    });
});