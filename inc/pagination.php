<?php
/**
 * Custom pagination markup and behavior.
 */

/**
 * Customize pagination arguments.
 *
 * @param  array  $args
 *
 * @return array
 */
add_filter('the_posts_pagination_args', 'exp_custom_pagination_args');
function exp_custom_pagination_args(array $args): array
{
    $args['screen_reader_text'] = '';
    $args['before_page_number'] = '';

    return $args;
}

/**
 * Customize pagination wrapper markup.
 *
 * @param  string  $template
 * @param  string  $class
 *
 * @return string
 */
add_filter('navigation_markup_template', 'exp_custom_pagination_markup', 10, 2);
function exp_custom_pagination_markup(string $template, string $class): string
{
    if ($class === 'pagination') {
        return '<div class="pagination">%3$s</div>';
    }

    return $template;
}
