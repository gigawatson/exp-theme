<?php
/**
 * Enqueue theme styles and scripts.
 */

/**
 * Enqueue front-end styles and scripts.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', 'exp_scripts_and_styles');
function exp_scripts_and_styles(): void
{
    // Styles
    wp_enqueue_style(
        'tw',
        get_stylesheet_directory_uri().'/css/output.css',
        [],
        filemtime(get_stylesheet_directory().'/css/output.css')
    );

    wp_enqueue_style(
        'exp',
        get_stylesheet_uri(),
        ['tw'],
        filemtime(get_stylesheet_directory().'/style.css')
    );

    // Remove unused block styles
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('wp-block-library');
}
