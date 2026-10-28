<?php
/**
 * Theme Setup and assets
 * @package HairFocus
 * 
 * 
 */

if (!defined('ABSPATH')) {
  exit;
}

function hairfocus_enqueue_assets()
{
  wp_enqueue_style('hairfocus-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

  $uri = get_template_directory_uri();
  
  wp_enqueue_style(
        'owl-carousel',
        $uri . '/assets/css/owl.carousel.min.css',
        array(),
        '2.3.4'
    );

    wp_enqueue_style(
        'owl-theme',
        $uri . '/assets/css/owl.theme.default.min.css',
        array('owl-carousel'),
        '2.3.4'
    );

    wp_enqueue_script(
        'owl-carousel',
        $uri . '/assets/js/owl.carousel.min.js',
        array('jquery'),
        '2.3.4',
        true
    );

  wp_enqueue_script('hairfocus-script', get_template_directory_uri() . '/assets/js/script.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'hairfocus_enqueue_assets');

function my_theme_setup()
{
  add_theme_support('post-thumbnails');

  add_theme_support('custom-logo');

  register_nav_menus(array(
    'primary' => __('Primary Menu', 'salvation-auto'),
  ));

}

add_action('after_setup_theme', 'my_theme_setup');

function register_services_custom_post_type() {
    $labels = array(
        'name'               => _x('Services', 'post type general name'),
        'singular_name'      => _x('Service', 'post type singular name'),
        'menu_name'          => _x('Services', 'admin menu'),
        'name_admin_bar'     => _x('Service', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'service'),
        'add_new_item'       => __('Add New Service'),
        'new_item'           => __('New Service'),
        'edit_item'          => __('Edit Service'),
        'view_item'          => __('View Service'),
        'all_items'          => __('All Services'),
        'search_items'       => __('Search Services'),
        'not_found'          => __('No services found.'),
        'not_found_in_trash' => __('No services found in Trash.')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'services'), // URL will be ://domain.com
        'capability_type'    => 'post',
        'has_archive'        => false, // The /services/ URL belongs to the Services page.
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio', // Dashboard icon
        'show_in_rest'       => true, // Enables the Gutenberg block editor
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('services', $args);
}
add_action('init', 'register_services_custom_post_type');


function register_services_taxonomy() {

    $labels = array(
        'name'              => __('Service Categories'),
        'singular_name'     => __('Service Category'),
        'search_items'      => __('Search Service Categories'),
        'all_items'         => __('All Service Categories'),
        'parent_item'       => __('Parent Service Category'),
        'parent_item_colon' => __('Parent Service Category:'),
        'edit_item'         => __('Edit Service Category'),
        'update_item'       => __('Update Service Category'),
        'add_new_item'      => __('Add New Service Category'),
        'new_item_name'     => __('New Service Category Name'),
        'menu_name'         => __('Categories')
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

add_action('init', 'register_services_taxonomy');


