<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <header class="entry-header">
        <h1 class="entry-title"><?php printf('Search results for: %s', get_search_query()); ?></h1>
    </header>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/entry'); ?>
    <?php endwhile; ?>
    <?php the_posts_pagination([
        'mid_size' => 2,
        'prev_text' => __('Previous'),
        'next_text' => __('Next'),
    ]); ?>
<?php else : ?>
    <article class="no-results not-found">
        <header class="entry-header">
            <h1 class="entry-title"><?php printf('Nothing found for: %s', get_search_query()); ?></h1>
        </header>
        <div class="entry-content">
            <p>Try again!</p>
            <?php get_search_form(); ?>
        </div>
    </article>
<?php endif; ?>
<?php get_footer(); ?>
