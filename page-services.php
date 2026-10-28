<?php
/**
 * Services page.
 * Template Name: Services
 *
 * @package HairFocus
 */

get_header();

get_template_part('template-parts/components/comp-page-hero', null, array(
    'eyebrow' => 'Services Menu',
    'title' => 'Expert care for every hair journey.',
    'text' => 'Thoughtful consultations, technical craft and service that feels genuinely personal—from everyday maintenance to transformative colour.'
));

get_template_part(
    'template-parts/components/comp-services',
    null,
    array(
        'title' => 'Our Services',
        'eyebrow' => 'Your local hair experts',
        'posts_per_page' => -1,
        'section_bg_color' => 'bg-secondary'
    )
);

?>

<section class="section-padding-top section-padding-bottom bg-primary">
    <div class="container services-pricing">
        <div class="title-wrapper">
            <p class="eyebrow">Service pricing</p>
            <h2>Service price list.</h2>
        </div>
        <div class="services-pricing__list-wrapper">
            <div class="services-pricing__list-block">
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="skin-care">
                        <div class="services-pricing__item-title">
                            <h4>Skin Care</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">
                                    Hair
                                </div>
                                <div class="service-card__category">
                                    Skin
                                </div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="skin-care-sub">
                        <div class="service-pricing__sub-items-inner">

                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>

                            <div class="service-pricing__sub-item">
                                <span>Dermalogica Full Facial With Jelly Mask</span>
                                <span class="price">From $100.00</span>
                            </div>

                            <div class="service-pricing__sub-item">
                                <span>Hair Treatment</span>
                                <span class="price">From $80.00</span>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="sample-care">
                        <div class="services-pricing__item-title">
                            <h4>Sample Care</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">
                                    Hair
                                </div>
                                <div class="service-card__category">
                                    Skin
                                </div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="sample-care-sub">
                        <div class="service-pricing__sub-items-inner">

                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>

                            <div class="service-pricing__sub-item">
                                <span>Dermalogica Full Facial With Jelly Mask</span>
                                <span class="price">From $100.00</span>
                            </div>

                            <div class="service-pricing__sub-item">
                                <span>Hair Treatment</span>
                                <span class="price">From $80.00</span>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="services-pricing__list-block">
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="face-care">
                        <div class="services-pricing__item-title">
                            <h4>Face Care</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">
                                    Hair
                                </div>
                                <div class="service-card__category">
                                    Skin
                                </div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="face-care-sub">
                        <div class="service-pricing__sub-items-inner">

                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>

                            <div class="service-pricing__sub-item">
                                <span>Dermalogica Full Facial With Jelly Mask</span>
                                <span class="price">From $100.00</span>
                            </div>

                            <div class="service-pricing__sub-item">
                                <span>Hair Treatment</span>
                                <span class="price">From $80.00</span>
                            </div>

                            <div class="service-pricing__sub-item">
                                <span>Skin Consultation</span>
                                <span class="price">From $50.00</span>
                            </div>

                        </div>

                    </div>
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
?>