document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    menuToggle.addEventListener('click', function () {
        menuToggle.classList.toggle('active');
        mobileNav.classList.toggle('active');
    });

   


});



const servicePriceToggles = document.querySelectorAll(
    '.service-pricing__item-title-wrapper'
);

servicePriceToggles.forEach(toggle => {
    toggle.addEventListener('click', function () {

        const subList = document.getElementById(this.id + '-sub');
        if (!subList) return;

        // Check whether clicked item is already active
        const isActive = this.classList.contains('active');

        // Close all currently active items
        servicePriceToggles.forEach(item => {
            item.classList.remove('active');

            const content = document.getElementById(item.id + '-sub');

            if (content) {
                content.classList.remove('active');
            }
        });

        // Open clicked item only if it was previously closed
        if (!isActive) {
            this.classList.add('active');
            subList.classList.add('active');
        }

    });
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

