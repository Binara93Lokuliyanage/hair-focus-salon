
<?php
/**
 * Theme setup, assets, custom post types, and taxonomies.
 *
 * @package HairFocus
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * 1. Theme Setup
 */
function hairfocus_theme_setup() {

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hairfocus'),
    ));
}
add_action('after_setup_theme', 'hairfocus_theme_setup');


/**
 * 2. Global Theme Assets
 */
function hairfocus_enqueue_assets() {

    $theme_uri = get_template_directory_uri();
    $version   = wp_get_theme()->get('Version');

    // Main stylesheet.
    wp_enqueue_style(
        'hairfocus-style',
        get_stylesheet_uri(),
        array(),
        $version
    );

    // Owl Carousel CSS.
    wp_enqueue_style(
        'owl-carousel',
        $theme_uri . '/assets/css/owl.carousel.min.css',
        array(),
        '2.3.4'
    );

    wp_enqueue_style(
        'owl-theme',
        $theme_uri . '/assets/css/owl.theme.default.min.css',
        array('owl-carousel'),
        '2.3.4'
    );

    // Owl Carousel JavaScript.
    wp_enqueue_script(
        'owl-carousel',
        $theme_uri . '/assets/js/owl.carousel.min.js',
        array('jquery'),
        '2.3.4',
        true
    );

    // Main theme JavaScript.
    wp_enqueue_script(
        'hairfocus-script',
        $theme_uri . '/assets/js/script.js',
        array('jquery', 'owl-carousel'),
        $version,
        true
    );
}
add_action('wp_enqueue_scripts', 'hairfocus_enqueue_assets');


/**
 * 3. Services Custom Post Type
 */
function hairfocus_register_services_post_type() {

    $labels = array(
        'name'               => __('Services', 'hairfocus'),
        'singular_name'      => __('Service', 'hairfocus'),
        'menu_name'          => __('Services', 'hairfocus'),
        'name_admin_bar'     => __('Service', 'hairfocus'),
        'add_new'            => __('Add New', 'hairfocus'),
        'add_new_item'       => __('Add New Service', 'hairfocus'),
        'new_item'           => __('New Service', 'hairfocus'),
        'edit_item'          => __('Edit Service', 'hairfocus'),
        'view_item'          => __('View Service', 'hairfocus'),
        'all_items'          => __('All Services', 'hairfocus'),
        'search_items'       => __('Search Services', 'hairfocus'),
        'not_found'          => __('No services found.', 'hairfocus'),
        'not_found_in_trash' => __('No services found in Trash.', 'hairfocus')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'services'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        )
    );

    register_post_type('services', $args);
}
add_action('init', 'hairfocus_register_services_post_type');


/**
 * 4. Services Category Taxonomy
 */
function hairfocus_register_services_taxonomy() {

    $labels = array(
        'name'              => __('Service Categories', 'hairfocus'),
        'singular_name'     => __('Service Category', 'hairfocus'),
        'search_items'      => __('Search Service Categories', 'hairfocus'),
        'all_items'         => __('All Service Categories', 'hairfocus'),
        'parent_item'       => __('Parent Service Category', 'hairfocus'),
        'parent_item_colon' => __('Parent Service Category:', 'hairfocus'),
        'edit_item'         => __('Edit Service Category', 'hairfocus'),
        'update_item'       => __('Update Service Category', 'hairfocus'),
        'add_new_item'      => __('Add New Service Category', 'hairfocus'),
        'new_item_name'     => __('New Service Category Name', 'hairfocus'),
        'menu_name'         => __('Categories', 'hairfocus')
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array(
            'slug' => 'service-category'
        )
    );

    register_taxonomy(
        'service_category',
        array('services'),
        $args
    );
}
add_action('init', 'hairfocus_register_services_taxonomy');


/**
 * 5. Gallery Custom Post Type
 */
function hairfocus_register_gallery_post_type() {

    $labels = array(
        'name'               => __('Gallery', 'hairfocus'),
        'singular_name'      => __('Gallery Item', 'hairfocus'),
        'menu_name'          => __('Gallery', 'hairfocus'),
        'add_new'            => __('Add New', 'hairfocus'),
        'add_new_item'       => __('Add New Gallery Item', 'hairfocus'),
        'edit_item'          => __('Edit Gallery Item', 'hairfocus'),
        'new_item'           => __('New Gallery Item', 'hairfocus'),
        'view_item'          => __('View Gallery Item', 'hairfocus'),
        'all_items'          => __('All Gallery Items', 'hairfocus'),
        'search_items'       => __('Search Gallery', 'hairfocus'),
        'not_found'          => __('No gallery items found', 'hairfocus'),
        'not_found_in_trash' => __('No gallery items found in Trash', 'hairfocus')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-format-gallery',
        'menu_position'      => 6,
        'supports'           => array(
            'title',
            'excerpt',
            'page-attributes'
        ),
        'hierarchical'       => false,
        'has_archive'        => false,
        'rewrite'            => false
    );

    register_post_type('gallery', $args);
}
add_action('init', 'hairfocus_register_gallery_post_type');


/**
 * 6. Gallery Branch Taxonomy
 */
function hairfocus_register_gallery_branch_taxonomy() {

    $labels = array(
        'name'          => __('Branches', 'hairfocus'),
        'singular_name' => __('Branch', 'hairfocus'),
        'menu_name'     => __('Branches', 'hairfocus'),
        'all_items'     => __('All Branches', 'hairfocus'),
        'edit_item'     => __('Edit Branch', 'hairfocus'),
        'add_new_item'  => __('Add New Branch', 'hairfocus'),
        'search_items'  => __('Search Branches', 'hairfocus')
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => false
    );

    register_taxonomy(
        'gallery_branch',
        array('gallery'),
        $args
    );
}
add_action('init', 'hairfocus_register_gallery_branch_taxonomy');


/**
 * 7. lightGallery Assets
 *
 * Only loaded on the Our Salons page.
 */
function hairfocus_enqueue_gallery_assets() {

    if (!is_page('our-salons') && !is_page_template('page-our-salons.php')) {
        return;
    }

    $theme_uri = get_template_directory_uri();
    $version   = '2.7.2';
    $cdn       = 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/' . $version;

    // lightGallery core CSS.
    wp_enqueue_style(
        'lightgallery-css',
        $cdn . '/css/lightgallery.min.css',
        array(),
        $version
    );

    // lightGallery video CSS.
    wp_enqueue_style(
        'lightgallery-video-css',
        $cdn . '/css/lg-video.min.css',
        array('lightgallery-css'),
        $version
    );

    // lightGallery core JavaScript.
    wp_enqueue_script(
        'lightgallery-js',
        $cdn . '/lightgallery.min.js',
        array(),
        $version,
        true
    );

    // lightGallery video plugin.
    wp_enqueue_script(
        'lightgallery-video-js',
        $cdn . '/plugins/video/lg-video.min.js',
        array('lightgallery-js'),
        $version,
        true
    );

    // Custom gallery initialization.
    wp_enqueue_script(
        'hairfocus-gallery',
        $theme_uri . '/assets/js/gallery.js',
        array(
            'lightgallery-js',
            'lightgallery-video-js'
        ),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'hairfocus_enqueue_gallery_assets');
