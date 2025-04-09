<?php get_header(); ?>
<header class="entry-header">
    <h1 class="entry-title"><?php the_archive_title(); ?></h1>
</header>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/entry'); ?>
<?php endwhile; endif; ?>
<?php the_posts_pagination([
    'mid_size' => 2,
    'prev_text' => __('Previous'),
    'next_text' => __('Next'),
]); ?>
<?php get_footer(); ?>
