<?php
/**
 * Admin dashboard and UI cleanup.
 */

/**
 * Remove unwanted dashboard widgets.
 *
 * @return void
 */
add_action('wp_dashboard_setup', 'exp_remove_dashboard_widgets');
function exp_remove_dashboard_widgets(): void
{
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');

    if (!current_user_can('manage_options')) {
        remove_action('welcome_panel', 'wp_welcome_panel');
        remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
    }
}

/**
 * Remove admin menu items for non-admins.
 *
 * @return void
 */
add_action('admin_init', 'exp_remove_admin_menu_items');
function exp_remove_admin_menu_items(): void
{
    if (!current_user_can('manage_options')) {
        remove_menu_page('tools.php');
        remove_menu_page('themes.php');
    }
}

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
