const menuMobile = document.getElementById('menu-mobile');

function toggleMenu () {
    const nav = document.getElementById('nav-bar');
    nav.classList.toggle('active');
}

function toggleBanner (){
    const nav = document.getElementById('banner');
    nav.classList.toggle('active');
}

menuMobile.addEventListener('click', toggleMenu);
menuMobile.addEventListener('click', toggleBanner);