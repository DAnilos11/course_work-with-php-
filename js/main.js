window.onscroll = function showNavbar() {

    var navbar = document.querySelector('.navbar')
    if(window.pageYOffset > 200){
        navbar.classList.add('navbar_fixed');
    } else{
        navbar.classList.remove('navbar_fixed');
    }
} 