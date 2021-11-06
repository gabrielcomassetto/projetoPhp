const btnMobile = document.getElementById('btn-mob')

function toggleMenu() {
    const nav = document.getElementById('menu-nav');
    nav.classList.toggle('active');
}



btnMobile.addEventListener('click', toggleMenu);