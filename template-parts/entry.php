<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (!is_front_page()) {
        get_template_part('template-parts/entry', 'header');
    } ?>
    <?php get_template_part('template-parts/entry', (is_archive() || is_search() ? 'summary' : 'content')); ?>
    <?php if (!is_archive() && !is_search() && !is_front_page()) {
        get_template_part('template-parts/entry', 'footer');
    } ?>
</article>
