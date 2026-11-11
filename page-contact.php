<?php
/**
 * Contact Page
 * 
 * @package HairFocus
 */

get_header();

get_template_part('template-parts/components/comp-page-hero', null, array(
    'eyebrow' => 'Contact Us',
    'title' => 'Let’s talk about your next visit.',
    'text' => 'Whether you have a question, want to discuss a service or need help managing your booking, our team is here.'
));

?>

<section class="section-padding-top section-padding-bottom bg-secondary">
    <div class="container contact-form">
        <div class="contact-form__content-wrapper">
            <div class="page-hero">
                <p class="eyebrow">Get in Touch</p>
                <h3>We’d love to hear from you.</h3>
                <p>Please fill out the form below and we will get back to you as soon as possible.</p>
            </div>
            <div class="contact-form__contacts-wrapper">
                <div class="contact-form__contact-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-phone.svg"
                        alt="Phone Icon">
                    <div class="contact-form__contact-text">
                        <p class="contact-form__contact-title">Call us</p>
                        <a href="tel:<?php echo esc_attr(get_theme_mod('phone_number')); ?>">
                            <!-- <?php echo esc_html(get_theme_mod('phone_number')); ?> -->
                            <h4>0433 44 1325</h4>
                        </a>

                    </div>
                </div>

                <div class="contact-form__contact-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-email.svg"
                        alt="Email Icon">
                    <div class="contact-form__contact-text">
                        <p class="contact-form__contact-title">Email us</p>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('email_address')); ?>">
                            <!-- <?php echo esc_html(get_theme_mod('email_address')); ?> -->
                            <h4>info@hairfocus.com.au</h4>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-wrapper">
            <div class="form-title-wrapper">
                <h3>Send us a message</h3>
                <p>We will get back to you as soon as possible.</p>
            </div>
            <div>
                <?php echo do_shortcode('[contact-form-7 id="d71efe3" title="Contact form 1"]'); ?>
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

get_footer();
?>