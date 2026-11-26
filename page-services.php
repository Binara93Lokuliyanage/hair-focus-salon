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
                    <div class="service-pricing__item-title-wrapper" id="hair-styling">
                        <div class="services-pricing__item-title">
                            <h4>Hair &amp; styling</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Hair</div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="hair-styling-sub">
                        <div class="service-pricing__sub-items-inner">
                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Oil Treatments</span>
                                <span class="price">From $50.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Botox Treatment</span>
                                <span class="price">From $250.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Nano Plastering</span>
                                <span class="price">From $250.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Perm</span>
                                <span class="price">From $200.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Certain Treatments</span>
                                <span class="price">From $250.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Permanent Straightening</span>
                                <span class="price">From $300.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Half head foils</span>
                                <span class="price">From $180.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Full head foils</span>
                                <span class="price">From $250.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Colour - Roots</span>
                                <span class="price">From $80.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Wash &amp; Blow Dry</span>
                                <span class="price">$75.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Hair Trim</span>
                                <span class="price">$40.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Haircut</span>
                                <span class="price">$60.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Haircut</span>
                                <span class="price">$40.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Beard Trim</span>
                                <span class="price">$30.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Grey Cover</span>
                                <span class="price">$60.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Highlights</span>
                                <span class="price">From $150.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="skin-care">
                        <div class="services-pricing__item-title">
                            <h4>Skin Care</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Skin</div>
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
                                <span>Dermalogica Facial With Microdermabrasion</span>
                                <span class="price">From $135.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Hydra-Microdermabrasion</span>
                                <span class="price">$160.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Chemical Peel (Dermalogica)</span>
                                <span class="price">From $150.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Hydra Facial With LED</span>
                                <span class="price">From $180.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Anti Aging Facial</span>
                                <span class="price">From $130.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Brightening Facial</span>
                                <span class="price">From $100.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Acne Facial</span>
                                <span class="price">From $110.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Deep Cleansing Facial</span>
                                <span class="price">From $80.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Melanopro</span>
                                <span class="price">$400.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s LED Treatments</span>
                                <span class="price">$40.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Skin Needling</span>
                                <span class="price">$170.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Full Body Scrub</span>
                                <span class="price">$175.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Facials</span>
                                <span class="price">$100.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Full Back Detox with LED</span>
                                <span class="price">$80.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Hydra facial</span>
                                <span class="price">$170.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Anti aging non surgical face lifting facial</span>
                                <span class="price">$180.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Salmon dna facial</span>
                                <span class="price">$165.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Salmon dna needling</span>
                                <span class="price">$185.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Melanopro Peel System</span>
                                <span class="price">$400.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="makeup-occasion-wear">
                        <div class="services-pricing__item-title">
                            <h4>Makeup &amp; Occasion Wear</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Hair</div>
                                <div class="service-card__category">Beauty</div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="makeup-occasion-wear-sub">
                        <div class="service-pricing__sub-items-inner">
                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Makeup &amp; Hair</span>
                                <span class="price">From $155.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Hair Style</span>
                                <span class="price">From $65.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Make Up</span>
                                <span class="price">From $95.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Hair, Make Up &amp; Saree Drapes</span>
                                <span class="price">From $150.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="massages">
                        <div class="services-pricing__item-title">
                            <h4>Massages</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Massage</div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="massages-sub">
                        <div class="service-pricing__sub-items-inner">
                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Body Massage</span>
                                <span class="price">$100.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Body Massage</span>
                                <span class="price">$80.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Shoulder Massage</span>
                                <span class="price">$40.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Foot Massage</span>
                                <span class="price">$40.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Men’s Head Massage</span>
                                <span class="price">$40.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="hair-removal">
                        <div class="services-pricing__item-title">
                            <h4>Hair removal</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Beauty</div>
                                <div class="service-card__category">Skin</div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="hair-removal-sub">
                        <div class="service-pricing__sub-items-inner">
                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Full Face Threading</span>
                                <span class="price">$45.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Full Arm Wax</span>
                                <span class="price">$35.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Full Leg Wax</span>
                                <span class="price">$50.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-pricing__list-block">
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="eyebrows-eyelashes">
                        <div class="services-pricing__item-title">
                            <h4>Eyebrows &amp; Eyelashes</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Beauty</div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="eyebrows-eyelashes-sub">
                        <div class="service-pricing__sub-items-inner">
                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Brow Lamination</span>
                                <span class="price">$90.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Lash Lift and Tint</span>
                                <span class="price">$80.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Women’s Eyebrow Threading</span>
                                <span class="price">$15.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Lash Extensions</span>
                                <span class="price">$120.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="oil-treatment">
                        <div class="services-pricing__item-title">
                            <h4>Oil Treatment</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Hair</div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="oil-treatment-sub">
                        <div class="service-pricing__sub-items-inner">
                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Oil Bath &amp; Blow Dry</span>
                                <span class="price">From $110.00</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Oil Bath</span>
                                <span class="price">From $70.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="scalp-detox">
                        <div class="services-pricing__item-title">
                            <h4>Scalp Detox</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Hair</div>
                                <div class="service-card__category">Scalp</div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="scalp-detox-sub">
                        <div class="service-pricing__sub-items-inner">
                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Basic Scalp Detox (30 Mins.)</span>
                                <span class="price">$75.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-pricing__item-wrapper">
                    <div class="service-pricing__item-title-wrapper" id="kids">
                        <div class="services-pricing__item-title">
                            <h4>Kids</h4>
                            <div class="service-card__category-wrapper">
                                <div class="service-card__category">Hair</div>
                            </div>
                        </div>
                        <div class="services-pricing__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.png"
                                alt="Plus Icon">
                        </div>
                    </div>
                    <div class="service-pricing__sub-items-wrapper" id="kids-sub">
                        <div class="service-pricing__sub-items-inner">
                            <div class="service-pricing__sub-item-heading">
                                <span>Service</span>
                                <span>Price</span>
                            </div>
                            <div class="service-pricing__sub-item">
                                <span>Kid’s Haircut</span>
                                <span class="price">$30.00</span>
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