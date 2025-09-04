const hamTog = document.querySelector('.ham-toggle');
const navBar = document.querySelector('.navbar');

hamTog.addEventListener('click', () => {
    hamTog.classList.toggle('active');
    navBar.classList.toggle('active');
})