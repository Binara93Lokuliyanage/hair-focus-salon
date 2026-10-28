<?php
/**
 * Services Component
 *
 * Displays services from the Services custom post type.
 */

$title = $args['title'] ?? 'Our Services';
$eyebrow = $args['eyebrow'] ?? 'Your local hair experts';
$posts_per_page = $args['posts_per_page'] ?? -1;
$section_bg_color = $args['section_bg_color'] ?? 'bg-primary';

$services_query = new WP_Query(array(
    'post_type' => 'services',
    'posts_per_page' => $posts_per_page,
    'orderby' => 'title',
    'order' => 'ASC'
));

?>

<section class="section-padding-top section-padding-bottom <?php echo esc_html($section_bg_color); ?>" id="home-services">
    <div class="container">

        <div class="title-wrapper">
            <p class="eyebrow">
                <?php echo esc_html($eyebrow); ?>
            </p>
            <h2><?php echo esc_html($title); ?></h2>
        </div>

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
                                        foreach ($categories as $category):
                                            ?>
                                            <div class="service-card__category">
                                                <?php echo esc_html($category->name); ?>
                                            </div>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>

                                </div>

                            </div>

                            <p><?php echo esc_html(get_the_excerpt()); ?></p>

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