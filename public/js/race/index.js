/* ===============================
   NAVBAR
================================ */

const mobileMenuButton = document.getElementById('mobile-menu-button');
const navbarMenu = document.querySelector('.navbar-menu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenuButton.classList.toggle('is-active');
    navbarMenu.classList.toggle('is-active');
});

