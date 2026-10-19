<?php
/**
 * Site header.
 *
 * @package HairFocus
 */

get_header();
?>

<section class="section-padding-top section-padding-bottom bg-secondary">
    <div class="container home-hero">
        <div class="home-hero__content">
            <p class="eyebrow">Your local hair experts</p>
            <h1 class="home-hero__title">Your hair.<br> Your moment.</h1>
            <p class="home-hero__description">Fearless. Fabulous. Fresh. Hair, beauty and moments of calm in Clayton and
                Cranbourne West.</p>
            <div class="home-hero__buttons-wrapper">
                <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>">
                    Book an appointment
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-white.svg"
                        alt="Arrow White">
                </a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-secondary">Explore
                    Services</a>
            </div>
        </div>

        <div class="home-hero__slider owl-carousel owl-theme">

            <!-- Slide 1 -->
            <div class="home-hero__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.png" alt="Hero Banner">
            </div>

            <!-- Slide 2 -->
            <div class="home-hero__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-hero-2.png" alt="Hero Banner">
            </div>

            <!-- Slide 3 -->
            <div class="home-hero__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.png" alt="Hero Banner">
            </div>

           

        </div>

    </div>
</section>

<section class="section-padding-top section-padding-bottom bg-primary">
    <div class = "container">
        <div class = "title-wrapper">
            <p class="eyebrow">Your local hair experts</p>
            <h2 class="home-hero__title">Our Services</h2>
        </div>
        <div class = "services-wrapper col-3">
            <div class = "card service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-hero-2.png" alt="Hero Banner">
                <div class = "service-card__content">
                    <h4>Hair & Styling</h4>
                    <p>Expert cuts, colors, blowouts, and styling services to create modern looks, from sleek bobs to voluminous waves—tailored to your lifestyle and personality.</p>
                </div>
            </div>
            <div class = "card service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-hero-2.png" alt="Hero Banner">
                <div class = "service-card__content">
                    <h4>Hair & Styling</h4>
                    <p>Expert cuts, colors, blowouts, and styling services to create modern looks, from sleek bobs to voluminous waves—tailored to your lifestyle and personality.</p>
                </div>
            </div>
            <div class = "card service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-hero-2.png" alt="Hero Banner">
                <div class = "service-card__content">
                    <h4>Hair & Styling</h4>
                    <p>Expert cuts, colors, blowouts, and styling services to create modern looks, from sleek bobs to voluminous waves—tailored to your lifestyle and personality.</p>
                </div>
            </div>
            <div class = "card service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-hero-2.png" alt="Hero Banner">
                <div class = "service-card__content">
                    <h4>Hair & Styling</h4>
                    <p>Expert cuts, colors, blowouts, and styling services to create modern looks, from sleek bobs to voluminous waves—tailored to your lifestyle and personality.</p>
                </div>
            </div>
            <div class = "card service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-hero-2.png" alt="Hero Banner">
                <div class = "service-card__content">
                    <h4>Hair & Styling</h4>
                    <p>Expert cuts, colors, blowouts, and styling services to create modern looks, from sleek bobs to voluminous waves—tailored to your lifestyle and personality.</p>
                </div>
            </div>
            <div class = "card service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-hero-2.png" alt="Hero Banner">
                <div class = "service-card__content">
                    <h4>Hair & Styling</h4>
                    <p>Expert cuts, colors, blowouts, and styling services to create modern looks, from sleek bobs to voluminous waves—tailored to your lifestyle and personality.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();