<!DOCTYPE html>
<html <?php language_attributes(); ?> class="antialiased">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <nav>
        <?php wp_nav_menu([
            'theme_location' => 'main-menu',
            'menu_class' => 'flex gap-x-4',
        ]); ?>
    </nav>
    <div id="search">
        <?php get_search_form(); ?>
    </div>
</header>
<main id="content">
