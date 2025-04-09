<header class="entry-header">
    <?php if (is_singular()) : ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php else : ?>
        <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php endif; ?>
</header>
