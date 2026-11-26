<?php

/**
 * 
 * Japanese Head SPA Page
 * 
 * @package HairFocus
 */

get_header();

get_template_part('template-parts/components/comp-page-hero', null, array(
    'eyebrow' => 'A Japanese ritual',
    'title' => 'A quieter kind of care.',
    'text' => 'Settle in for scalp cleansing, therapeutic massage and a moment to yourself.'
));

get_template_part(
    'template-parts/components/comp-services',
    null,
    array(
        'title' => '',
        'eyebrow' => '',
        'posts_per_page' => -1,
        'section_bg_color' => 'bg-primary',
        'category' => 'spa',
        'show_price' => true,
        'show_button' => true
    )
);

?>

<section class="section-padding-top section-padding-bottom bg-secondary">
    <div class="container faq-container">
        <div class="col-2">
            <div class="faq-video">
                <video autoplay muted loop playsinline>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/japanese-head-spa.mp4"
                        type="video/mp4">
                </video>
            </div>
            <div class="faq-content">
                <div class="faq-item">
                    <div class="faq-item__title" id = "what-is-japanese-head-spa">
                        <h4>What is a Japanese Head Spa?</h4>
                        <div class="faq-item__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="faq-item__content" id="what-is-japanese-head-spa-content">
                        <p>A Japanese Head Spa is a luxurious treatment that focuses on scalp care, hair health, and relaxation. It typically includes a deep cleansing of the scalp, a therapeutic massage, and the application of specialized products to nourish the hair and scalp.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
