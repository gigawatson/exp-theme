<?php
/**
 * Utility functions used throughout the theme.
 */

/**
 * Returns a human-readable string of the last modified date for the current post.
 *
 * Format: "Last updated 3 days ago on January 14, 2025"
 *
 * @return string The formatted last modified date string.
 */
function exp_last_updated(): string
{
    $modified_timestamp = get_the_modified_time('U');
    $modified_date = get_the_modified_date('F j, Y');
    $now = current_time('timestamp');
    $diff = human_time_diff($modified_timestamp, $now);

    return 'Last updated '.$diff.' ago on '.$modified_date;
}
