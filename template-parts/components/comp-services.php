<?php
/**
 * Services Component
 *
 * Displays services from the Services custom post type.
 */

$title = $args['title'];
$eyebrow = $args['eyebrow'];
$posts_per_page = $args['posts_per_page'] ?? -1;
$section_bg_color = $args['section_bg_color'] ?? 'bg-primary';
$category = $args['category'] ?? null;
$show_price = $args['show_price'] ?? false;
$show_button = $args['show_button'] ?? false;

$query_args = array(
    'post_type' => 'services',
    'posts_per_page' => $posts_per_page,
    'orderby' => 'title',
    'order' => 'ASC'
);

if (!empty($category)) {
    $query_args['tax_query'] = array(
        array(
            'taxonomy' => 'service_category',
            'field' => 'slug',
            'terms' => $category
        )
    );
}

$services_query = new WP_Query($query_args);

?>

<section
    class="<?php if (!empty($eyebrow) || !empty($title)): ?>section-padding-top <?php endif ?> section-padding-bottom <?php echo esc_html($section_bg_color); ?>"
    id="home-services">
    <div class="container">

        <?php if (!empty($eyebrow) || !empty($title)): ?>
            <div class="title-wrapper">
                <p class="eyebrow">
                        <?php echo esc_html($eyebrow); ?>
                </p>
                <h2><?php echo esc_html($title); ?></h2>
            </div>
        <?php endif; ?>

        <?php if ($services_query->have_posts()): ?>

            <div class="services-wrapper col-3">

                <?php while ($services_query->have_posts()):
                    $services_query->the_post();

                    $categories = get_the_terms(
                        get_the_ID(),
                        'service_category'
                    );
                    ?>


                    <div class="card service-card">

                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>

                        <div class="service-card__content">

                            <div class="service-card__title">

                                <h4><?php the_title(); ?></h4>

                                <div class="service-card__category-wrapper">

                                    <?php
                                    if ($categories && !is_wp_error($categories)):
                                        foreach ($categories as $service_category):
                                            ?>
                                            <div class="service-card__category">
                                                <?php echo esc_html($service_category->name); ?>
                                            </div>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>

                                </div>

                            </div>

                            <p><?php echo esc_html(get_the_excerpt()); ?></p>

                            <div class="service-card__extra-data-wrapper">

                                <?php if ($show_price && (!empty(get_field('price')) || !empty(get_field('duration')))): ?>
                                    <div class="service-card__meta">
                                            <?php if (!empty(get_field('price'))): ?>
                                            <span class="service-card__price">AU$ <?php echo esc_html(get_field('price')); ?></span>
                                            <?php endif; ?> -
                                        <?php if (!empty(get_field('duration'))): ?>
                                            <span class="service-card__duration"><?php echo esc_html(get_field('duration')); ?>
                                                mins</span>
                                            <?php endif; ?>
                                    </div>
                                    <?php endif; ?>

                                <?php if ($show_button && !empty(get_field('button_label')) && !empty(get_field('button_link'))): ?>
                                    <a href="<?php echo esc_url(get_field('button_link')); ?>" class="btn btn-primary">
                                            <?php echo esc_html(get_field('button_label')); ?>
                                    </a>
                                    <?php endif; ?>
                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            </div>

            <?php wp_reset_postdata(); ?>

        <?php else: ?>

            <p>No services found.</p>

        <?php endif; ?>

    </div>
</section>
