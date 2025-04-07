<?php
/**
 * Custom archive behavior and query modifications.
 */

/**
 * Disable unwanted archive templates (author, category, tag, date, tax, attachment).
 *
 * @return void
 */
add_action('template_redirect', 'exp_disable_unwanted_archives');
function exp_disable_unwanted_archives(): void
{
    if (is_author() || is_category() || is_tag() || is_date() || is_tax() || is_attachment()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
        include get_query_template('404');
        exit;
    }
}
