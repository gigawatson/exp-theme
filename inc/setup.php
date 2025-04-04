<?php
/**
 * Theme setup and core configuration.
 */

/**
 * Perform theme setup tasks.
 *
 * @return void
 */
add_action('after_setup_theme', 'exp_theme_setup');
function exp_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form']);

    // Cleanup: remove unnecessary WP features.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    add_filter('wp_img_tag_add_auto_sizes', '__return_false');
    add_filter('wp_is_application_passwords_available', '__return_false');

    register_nav_menus([
        'main-menu' => esc_html__('Main Menu'),
        'footer-menu' => esc_html__('Footer Menu'),
    ]);
}
