<?php $color_mode = get_theme_mod('_themename_footer_bg', 'light'); ?>

<!-- Footer -->
<footer class="text-center text-muted <?php echo 'bg-' . $color_mode ?>">
    <section class="d-flex justify-content-center p-4 border-bottom">
        Get connected with us on social networks
    </section>

    <?php get_template_part('template-parts/footer/widgets'); ?>
    <?php get_template_part('template-parts/footer/info'); ?>

</footer>
<!-- Footer -->
<?php wp_footer(); ?>
</body>

</html>