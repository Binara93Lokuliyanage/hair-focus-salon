document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    menuToggle.addEventListener('click', function () {
        menuToggle.classList.toggle('active');
        mobileNav.classList.toggle('active');
    });


    
jQuery(function ($) {

    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: true,

        // Fade transition
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',

        // Automatic sliding
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,

        // Transition speed
        smartSpeed: 3000,
        autoplaySpeed: 3000,
        dotsSpeed: 3000
    });

});


});