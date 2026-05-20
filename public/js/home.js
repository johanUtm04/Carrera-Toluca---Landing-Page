document.addEventListener('DOMContentLoaded', () => {
    const runnerImg = document.querySelector('.runner');
    const registerBtn = document.getElementById('btn-registrarme');
    const heroSection = document.querySelector('.hero');

    /* ==========================================================================
       1. REGISTRO & EFECTO DE TRANSICIÓN SUAVE
       ========================================================================== */
    if (registerBtn) {
        registerBtn.addEventListener('click', () => {
            registerBtn.innerText = "Abriendo Portal...";
            registerBtn.style.opacity = "0.8";
            setTimeout(() => {
                window.location.href = '/register-race';
            }, 300);
        });
    }

    /* ==========================================================================
       2. EFECTO MATRIX / GLITCH EN LOS STATS (CYBERSECURITY STYLE)
       ========================================================================== */
    // Decodifica dinámicamente tus números del Hero para simular descifrado de datos
    const stats = document.querySelectorAll('.hero-stats strong');
    
    const decryptEffect = (element, finalValue) => {
        const chars = '0123456789X$/%#@+';
        let iterations = 0;
        const targetLength = finalValue.toString().length;

        const interval = setInterval(() => {
            element.innerText = finalValue.toString()
                .split("")
                .map((char, index) => {
                    if(index < iterations) {
                        return finalValue.toString()[index];
                    }
                    return chars[Math.floor(Math.random() * chars.length)];
                })
                .join("");
            
            if(iterations >= targetLength) {
                clearInterval(interval);
                element.innerText = finalValue;
            }
            iterations += 1 / 3;
        }, 25);
    };

    stats.forEach(stat => {
        const originalText = stat.innerText;
        decryptEffect(stat, originalText);
    });

    /* ==========================================================================
       3. EFECTO PARALLAX INTERACTIVO (HERO)
       ========================================================================== */
    if (heroSection && runnerImg && window.innerWidth > 992) {
        heroSection.addEventListener('mousemove', (e) => {
            const rect = heroSection.getBoundingClientRect();
            const x = e.clientX - rect.left - (rect.width / 2);
            const y = e.clientY - rect.top - (rect.height / 2);

            const moveX = x / -60;
            const moveY = y / -60;

            runnerImg.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.02)`;
            runnerImg.style.transition = 'transform 0.05s ease-out';
        });

        heroSection.addEventListener('mouseleave', () => {
            runnerImg.style.transform = 'translate(0px, 0px) scale(1)';
            runnerImg.style.transition = 'transform 0.4s ease-in-out';
        });
    }

    /* ==========================================================================
       4. CONTROL DE PESTAÑAS (TABS RECORRIDO)
       ========================================================================== */
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');

            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => {
                content.classList.remove('active');
                content.style.opacity = 0;
            });

            button.classList.add('active');
            const activeContent = document.getElementById(targetId);
            activeContent.classList.add('active');
            
            // Forzar reflow rápido para la animación CSS
            setTimeout(() => { activeContent.style.opacity = 1; }, 50);
        });
    });

    /* ==========================================================================
       5. ACORDEÓN DE PREGUNTAS FRECUENTES (FAQ OPTIMIZADO)
       ========================================================================== */
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const currentItem = question.parentElement;
            const answer = currentItem.querySelector('.faq-answer');
            const isActive = currentItem.classList.contains('active');
            
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== currentItem) {
                    item.classList.remove('active');
                    item.querySelector('.faq-answer').style.maxHeight = null;
                }
            });

            if (!isActive) {
                currentItem.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                currentItem.classList.remove('active');
                answer.style.maxHeight = null;
            }
        });
    });

    /* ==========================================================================
       6. EASTER EGG EN CONSOLA PARA RECLUTADORES (SOC / DEFENSA)
       ========================================================================== */
console.clear();

const currentPage = window.location.pathname;

if (currentPage === "/") {
    console.log(
        "%cWe are in the page 1 (home)",
        "color: lime; font-size: 16px; font-weight: bold;"
    );

} else if (currentPage === "/login") {
    console.log(
        "%cWe are in the Page 2 (Login)",
        "color: cyan; font-size: 16px; font-weight: bold;"
    );

} else if (currentPage === "/register") {
    console.log(
        "%cWe are in the Page 3 (Register)",
        "color: orange; font-size: 16px; font-weight: bold;"
    );

} else {
    console.log(
        "%c📄 UNKNOWN PAGE",
        "color: gray; font-size: 16px;"
    );
}
});