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
