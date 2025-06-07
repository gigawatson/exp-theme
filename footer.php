</main>
<footer id="footer">
    <?php wp_nav_menu([
        'theme_location' => 'footer-menu',
        'container' => 'nav',
        'container_class' => '',
        'menu_class' => 'flex gap-x-4',
        'add_li_class' => '',
        'link_before' => '',
        'link_after' => '',
    ]); ?>
    <div id="copyright">
        &copy; <?= esc_html(date_i18n(__('Y'))); ?> <?= esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
