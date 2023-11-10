let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('#main-nav');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}