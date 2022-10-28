window.onload=function(){
    var toggleButton = document.querySelector('.toggle-button');
    var navbarLinks = document.querySelector('.navbar-links');
    toggleButton.addEventListener('click', function(){
        navbarLinks.classList.toggle('active');
    });
}