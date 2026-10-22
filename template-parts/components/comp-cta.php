<?php
$args = wp_parse_args($args, array(
    'eyebrow' => 'Hair Focus Salon',
    'title'       => 'Make a Little Time For You.',
    'text'   => 'Expert care, a fresh look a moment of a calm. We look forward to welcome you.',
    'button_link' => '#',
    'button_text' => 'Read More',
));
?>

<section class = "section-padding-top section-padding-bottom bg-dark border-bottom-dark">
    <div class = "container comp-cta">
        <p class = "eyebrow"><?php echo esc_html( $args['eyebrow'] ); ?></p>
        <h2><?php echo esc_html( $args['title'] ); ?></h2>
        <p><?php echo esc_html( $args['text'] ); ?></p>
        <a href = "<?php echo esc_html( $args['button_link'] ); ?>" class="btn btn-primary">
            <?php echo esc_html( $args['button_text'] ); ?>
        </a>
    </div>
</section>
