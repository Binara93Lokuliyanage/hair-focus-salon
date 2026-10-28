<?php
/**
 * Site header.
 *
 * @package HairFocus
 */

get_header();
?>

<section class="section-padding-top section-padding-bottom bg-secondary" id="home-hero">
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

<!-- <section class="section-padding-top section-padding-bottom bg-secondary" id=""home-about">
    <div class="container home-about">
        <div class = "title-wrapper">
            <p class="eyebrow">Your local hair experts</p>
            <h2>About Us</h2>
        </div>
        <p class = "text-center">lorem ipsum dolor sit amet consectetur adipiscing elit non tempore consequat consectetur nulla distinctio consequatur in nihil est fuga culpa occaecat cupiditate laborum ea qui placeat et vel fugiat nostrud deserunt quidem excepturi id officia expedita dignissimos mollitia consequatur quidem ut quo odio deserunt veniam dolorum sit irure in et</p>
    </div>
</section> -->



<?php
get_template_part(
    'template-parts/components/comp-services',
    null,
    array(
        'title'          => 'Our Services',
        'eyebrow'        => 'Your local hair experts',
        'posts_per_page' => 6
    )
);
?>


<section class="section-padding-top section-padding-bottom bg-secondary" id="home-services">
    <div class="container">
        <div class="title-wrapper">
            <p class="eyebrow">Your local hair experts</p>
            <h2>Our Branches</h2>
        </div>
        <div class="col-2">
            <div class="card branch-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.png" alt="Hero Banner">
                <div class="branch-card__content">
                    <h4>Clayton</h4>
                    <p>1402–1404 Dandenong Rd</p>
                    <a href="#" class="btn-cta">
                        View Salon
                        <span>→</span>
                    </a>
                </div>

            </div>
            <div class="card branch-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.png" alt="Hero Banner">
                <div class="branch-card__content">
                    <h4>Clayton</h4>
                    <p>1402–1404 Dandenong Rd</p>
                    <a href="#" class="btn-cta">
                        View Salon
                        <span>→</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/components/comp-cta', null, array(
    'eyebrow' => 'Hair Focus Salon',
    'title' => 'Make a Little Time For You.',
    'text' => 'Expert care, a fresh look a moment of a calm. We look forward to welcome you.',
    'button_link' => '#',
    'button_text' => 'Book Now',
));
?>


<?php
get_footer();