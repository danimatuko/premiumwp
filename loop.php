<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
<?php get_template_part('template-parts/post/content') ?>
<?php endwhile;
else :
    get_template_part('template-parts/post/content-none'); ?>
<?php endif; ?>