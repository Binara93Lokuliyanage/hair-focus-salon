<?php
    $args = wp_parse_args( $args, array (
        'eyebrow'=>'Hair Focus Salon',
        'title' => 'Custom Page',
        'text' => 'Page Description'
    ) )
    
?>

<section class = "section-padding-top section-padding-bottom bg-primary">
    <div class = "container page-hero">
        <p class = "eyebrow"><?php echo esc_html( $args['eyebrow'] ); ?></p>
        <h1><?php echo esc_html($args['title']); ?></h1>
        <p><?php echo esc_html($args['text']); ?></p>
    </div>
</section>

