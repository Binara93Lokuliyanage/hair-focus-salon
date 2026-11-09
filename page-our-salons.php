<?php
/**
 * Our Salons page.
 * Template Name: Services
 *
 * @package HairFocus
 */

get_header();



get_template_part('template-parts/components/comp-page-hero', null, array(
    'eyebrow' => 'Our Salons',
    'title' => 'Two salons. One warm welcome.',
    'text' => 'Thoughtful consultations, technical craft and service that feels genuinely personal—from everyday maintenance to transformative colour.'
));

?>

<section class = "section-padding-bottom bg-primary">
    <div class = "container col-2">
        <div class = "card branch-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.png" alt="Hero Banner">
                <div class="branch-card__content">
                    <h4>Clayton</h4>
                    <p>1402–1404 Dandenong Rd</p>
                    <div class = "branch-card__hours-wrapper">
                        <div>
                            <p>Monday</p>
                            <p>Monday</p>
                            <p>Monday</p>
                            <p>Monday</p>
                            <p>Monday</p>
                            <p>Monday</p>
                            <p>Monday</p>
                        </div>

                        <div>
                            <p>8.00am - 6.00pm</p>
                            <p>8.00am - 6.00pm</p>
                            <p>8.00am - 6.00pm</p>
                            <p>8.00am - 6.00pm</p>
                            <p>8.00am - 6.00pm</p>
                            <p>8.00am - 6.00pm</p>
                            <p>8.00am - 6.00pm</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">
                        Book Here
                        <span>→</span>
                    </a>
                </div>

        </div>
    </div>
</section>

<section class = "section-padding-top section-padding-bottom bg-secondary">
    
</section>

<?php

get_template_part('template-parts/components/comp-salon-gallery', null, array(
   
));

get_template_part('template-parts/components/comp-cta', null, array(
    'eyebrow' => 'Hair Focus Salon',
    'title' => 'Make a Little Time For You.',
    'text' => 'Expert care, a fresh look a moment of a calm. We look forward to welcome you.',
    'button_link' => '#',
    'button_text' => 'Book Now',
));

get_footer();
?>