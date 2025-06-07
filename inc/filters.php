<?php
/**
 * Theme filters for UI enhancements and admin tweaks.
 */

/**
 * Add Tailwind base classes to body.
 *
 * @param  string[]  $classes
 *
 * @return string[]
 */
add_filter('body_class', 'exp_body_class');
function exp_body_class(array $classes): array
{
    $classes[] = 'bg-stone-50';

    return $classes;
}

/**
 * Add custom editor stylesheet to TinyMCE.
 *
 * @param  string  $mce_css
 *
 * @return string
 */
add_filter('mce_css', 'exp_add_custom_editor_style');
function exp_add_custom_editor_style(string $mce_css): string
{
    return get_stylesheet_directory_uri().'/css/tinymce-custom-editor.css';
}

/**
 * Customize display post states in admin list.
 *
 * @param  array    $states
 * @param  WP_Post  $post
 *
 * @return array
 */
add_filter('display_post_states', 'exp_post_states', 10, 2);
function exp_post_states(array $states, WP_Post $post): array
{
    $post_status = get_post_status_object($post->post_status);

    if (!$post_status) {
        return $states;
    }

    $colored_labels = [
        'Pending' => '<span style="color:oklch(0.795 0.184 86.047)">Pending</span>',
        'Published' => '<span style="color:oklch(0.627 0.194 149.214)">Live</span>',
        'Draft' => '<span style="color:oklch(0.704 0.04 256.788)">Draft</span>',
    ];

    if (isset($colored_labels[$post_status->label])) {
        $post_status->label = $colored_labels[$post_status->label];
    }

    if (!in_array($post_status->label, $states, true)) {
        $states[$post_status->name] = $post_status->label;
    }

    return $states;
}

/**
 * Add additional class to menu li by passing 'add_li_class' to `wp_nav_menu()`.
 *
 * @param  array     $classes
 * @param  WP_Post   $item
 * @param  stdClass  $args
 *
 * @return array
 */
add_filter('nav_menu_css_class', 'exp_add_additional_class_on_menu_li', 1, 3);
function exp_add_additional_class_on_menu_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
