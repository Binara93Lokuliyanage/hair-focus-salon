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
