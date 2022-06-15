
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};
const sr = ScrollReveal ({
    distance: '60px',
    duration: 2500,
    reset: true
})
sr.reveal('.home-text',{delay:200,origin:'top'})
sr.reveal('.home-img',{delay:200,origin:'top'})