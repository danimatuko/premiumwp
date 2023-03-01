<?php get_header() ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
<div>
    <?php firsttheme_post_meta() ?>
</div>
<div>
    <?php the_excerpt(); ?>
</div>
<div>
    <?php firsttheme_readmore_link(); ?>

</div>
<?php endwhile;
else : ?>
<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>