document.addEventListener('DOMContentLoaded', () => {
    const runnerImg = document.querySelector('.runner');
    const registerBtn = document.getElementById('btn-registrarme');
    const heroSection = document.querySelector('.hero');

    // 1. Redirección suave al hacer clic en registrarme
    if (registerBtn) {
        registerBtn.addEventListener('click', () => {
            registerBtn.innerText = "Abriendo...";
            setTimeout(() => {
                window.location.href = '/register-race';
            }, 300);
        });
    }

    // 2. Efecto Parallax interactivo en el Hero para pantallas grandes
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

    // 3. CONTROL DE PESTAÑAS (Tabs) EN LA SECCIÓN DE RECORRIDO
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');

            // Quitar clase activa de botones y contenidos
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Activar pestaña seleccionada
            button.classList.add('active');
            document.getElementById(targetId).classList.add('active');
        });
    });

    // 4. ACORDEÓN DE PREGUNTAS FRECUENTES (FAQ)
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const currentItem = question.parentElement;
            
            // Cierra los otros acordeones si se abre uno nuevo (opcional)
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== currentItem) {
                    item.classList.remove('active');
                }
            });

            // Conmutar el estado del acordeón actual
            currentItem.classList.toggle('active');
        });
    });
});