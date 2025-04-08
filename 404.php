<?php get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title">Not Found</h1>
    </header>
    <div class="entry-content">
        <p>Sorry, but the page you were trying to view does not exist, yet. Recalibrate your time machine, or try
            a search instead.</p>
        <?php get_search_form(); ?>
    </div>
</article>
<?php get_footer(); ?>
