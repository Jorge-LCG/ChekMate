document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menu-btn');
    const menuMobile = document.getElementById('menu-mobile');
    const menuIcon = menuBtn.querySelector('i');
    
    menuBtn.addEventListener('click', function() {
        menuMobile.classList.toggle('hidden');
        
        if (menuMobile.classList.contains('hidden')) {
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');
        } else {
            menuIcon.classList.remove('fa-bars');
            menuIcon.classList.add('fa-times');
        }
    });
    
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
            menuMobile.classList.add('hidden');
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');
        }
    });
});