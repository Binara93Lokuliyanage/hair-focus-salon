document.addEventListener('DOMContentLoaded', function () {

    const gallery = document.querySelector('#salon-gallery');

    if (!gallery) return;

    lightGallery(gallery, {
        selector: '.salon-gallery__item',
        plugins: [lgVideo],
        speed: 500,
        download: false,
        counter: true,
        controls: true,
        closable: true
    });

});