const hamTog = document.querySelector('.ham-toggle');
const navBar = document.querySelector('.navbar');
const navMenu = document.querySelector('#navmenu');

hamTog.addEventListener('click', () => {
    hamTog.classList.toggle('active');
    navBar.classList.toggle('active');

    if(navMenu.classList.contains('show')){
        navMenu.classList.remove('show');
    }else{
        navMenu.classList.add('show');
    }

});