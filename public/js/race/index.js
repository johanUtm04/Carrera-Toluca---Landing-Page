/* ===============================
   NAVBAR
================================ */

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const navbarMenu = document.querySelector('.navbar-menu');
    const navbarLinks = document.querySelectorAll('.navbar-link');

    if (mobileMenuButton && navbarMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenuButton.classList.toggle('is-active');
            navbarMenu.classList.toggle('is-active');
        });

        navbarLinks.forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenuButton.classList.remove('is-active');
                navbarMenu.classList.remove('is-active');
            });
        });
    }

    initScrollReveal();
});


/* ===============================
   SCROLL REVEAL
================================ */

function initScrollReveal() {
    const sections = document.querySelectorAll('.race-page > section');

    if (!sections.length) {
        return;
    }

    sections.forEach((section, index) => {
        section.classList.add('scroll-reveal');

        if (index % 2 === 0) {
            section.classList.add('reveal-delay-small');
        } else {
            section.classList.add('reveal-delay-medium');
        }
    });

    const observerOptions = {
        root: null,
        threshold: 0.16,
        rootMargin: '0px 0px -80px 0px',
    };

    const sectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, observerOptions);

    sections.forEach((section) => {
        sectionObserver.observe(section);
    });
}