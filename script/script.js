const menuMobile = document.getElementById('menu-mobile');

function toggleMenu (event) {
    if(event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav-bar');
    nav.classList.toggle('active');
}

function toggleBanner (){
    const nav = document.getElementById('banner');
    nav.classList.toggle('active');
}

menuMobile.addEventListener('click', toggleMenu);
menuMobile.addEventListener('touchstart', toggleMenu);
menuMobile.addEventListener('click', toggleBanner);
menuMobile.addEventListener('touchstart', toggleBanner);