<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages(['before' => '<div class="entry-pagination">', 'after' => '</div>']); ?>
    </div>
    <footer class="entry-footer text-sm">
        <p><?= exp_last_updated() ?></p>
    </footer>
</article>
