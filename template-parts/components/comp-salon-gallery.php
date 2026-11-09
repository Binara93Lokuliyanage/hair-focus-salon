
<?php
/**
 * Salon Gallery Component
 *
 * @package HairFocus
 */

$gallery_query = new WP_Query(array(
    'post_type'      => 'gallery',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order title',
    'order'          => 'ASC'
));

if ($gallery_query->have_posts()) :
?>

<section class="section-padding-top section-padding-bottom bg-primary">

    <div class="container">

        <div class="title-wrapper">
            <p class="eyebrow">Hair Focus Salon</p>
            <h2>Our Gallery</h2>
        </div>

        <div class="salon-gallery" id="salon-gallery">

            <?php while ($gallery_query->have_posts()) :
                $gallery_query->the_post();

                $media_type = get_field('media_type');
                $image_id = get_field('gallery_image');
                $video_id = get_field('gallery_video');
                $poster_id = get_field('video_poster');

                $image_attachment_id = is_array($image_id)
                    ? absint($image_id['ID'] ?? $image_id['id'] ?? 0)
                    : absint($image_id);
                $image_url = $image_attachment_id
                    ? wp_get_attachment_image_url($image_attachment_id, 'full')
                    : (is_string($image_id) ? $image_id : '');
            ?>

                <?php if ($media_type === 'image' && $image_url) : ?>

                    <a class="salon-gallery__item" href="<?php echo esc_url($image_url); ?>">

                        <?php if ($image_attachment_id) : ?>
                            <?php echo wp_get_attachment_image($image_attachment_id, 'large'); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="">
                        <?php endif; ?>

                        <div class="salon-gallery__caption">
                            <?php the_excerpt(); ?>
                        </div>

                    </a>

                <?php elseif ($media_type === 'video') :
                    $video_attachment_id = is_array($video_id)
                        ? absint($video_id['ID'] ?? $video_id['id'] ?? 0)
                        : (is_numeric($video_id) ? absint($video_id) : 0);
                    $video_url = is_array($video_id)
                        ? ($video_id['url'] ?? '')
                        : ($video_attachment_id ? wp_get_attachment_url($video_attachment_id) : $video_id);
                    $poster_attachment_id = is_array($poster_id)
                        ? absint($poster_id['ID'] ?? $poster_id['id'] ?? 0)
                        : absint($poster_id);
                    $poster_url = $poster_attachment_id
                        ? wp_get_attachment_image_url($poster_attachment_id, 'large')
                        : (is_array($poster_id) ? ($poster_id['url'] ?? '') : (is_string($poster_id) ? $poster_id : ''));
                    $video_path = is_string($video_url) ? wp_parse_url($video_url, PHP_URL_PATH) : '';
                    $video_type = $video_attachment_id ? get_post_mime_type($video_attachment_id) : '';
                    if (strpos((string) $video_type, 'video/') !== 0) {
                        $video_type = $video_path ? wp_check_filetype($video_path)['type'] : '';
                    }
                    $video_type = is_string($video_type) ? $video_type : '';
                    ?>

                    <?php if (is_string($video_url) && $video_url) : ?>
                        <a
                            class="salon-gallery__item"
                            href="<?php echo esc_url($video_url); ?>"
                            <?php if (strpos($video_type, 'video/') === 0) :
                                $video_data = array(
                                    'source' => array(array(
                                        'src' => $video_url,
                                        'type' => $video_type,
                                    )),
                                    'attributes' => array(
                                        'preload' => false,
                                        'controls' => true,
                                    ),
                                );
                                ?>
                                data-video="<?php echo esc_attr(wp_json_encode($video_data)); ?>"
                            <?php else : ?>
                                data-src="<?php echo esc_url($video_url); ?>"
                            <?php endif; ?>
                            <?php if ($poster_url) : ?>
                                data-poster="<?php echo esc_url($poster_url); ?>"
                            <?php endif; ?>
                        >

                            <?php if ($poster_attachment_id) : ?>
                                <?php echo wp_get_attachment_image($poster_attachment_id, 'large'); ?>
                            <?php elseif ($poster_url) : ?>
                                <img src="<?php echo esc_url($poster_url); ?>" alt="">
                            <?php endif; ?>

                            <span class="salon-gallery__play-icon">▶</span>

                            <div class="salon-gallery__caption">
                                <?php the_excerpt(); ?>
                            </div>

                        </a>
                    <?php endif; ?>

                <?php endif; ?>
            <?php endwhile; ?>

        </div>

    </div>

</section>

<?php
    wp_reset_postdata();
endif;
?>
