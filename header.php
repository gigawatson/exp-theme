<!DOCTYPE html>
<html <?php language_attributes(); ?> class="antialiased">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(['bg-stone-50']); ?>>
<?php wp_body_open(); ?>
<div id="wrapper">
    <header>
        <div id="site-title">
            <a href="<?= esc_url(home_url('/')) ?>" title="<?= esc_attr(get_bloginfo('name')) ?>">
                <?= esc_html(get_bloginfo('name')) ?>
            </a>
        </div>
        <div id="site-description">
            <?= esc_html(get_bloginfo('description')) ?>
        </div>
        <?php wp_nav_menu([
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'w-full',
            'menu_class' => 'flex justify-center gap-x-4',
            'add_li_class' => '',
            'link_before' => '',
            'link_after' => '',
        ]); ?>
        <div id="search">
            <?php get_search_form(); ?>
        </div>
    </header>
    <main id="content">
