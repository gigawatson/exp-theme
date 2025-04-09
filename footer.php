</main>
<footer id="footer">
    <?php wp_nav_menu([
        'theme_location' => 'footer-menu',
        'container' => 'nav',
        'menu_class' => 'flex gap-x-4',
    ]); ?>
    <div id="copyright">
        &copy; <?= esc_html(date_i18n(__('Y'))); ?> <?= esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
