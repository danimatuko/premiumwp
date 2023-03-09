<?php get_header() ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <!-- run the loop -->
            <?php get_template_part('loop', 'index') ?>
            <div class="py-2">
                <?php the_posts_pagination(); ?>
            </div>
        </div>

        <div class="col-md-4"><?php get_sidebar() ?></div>
    </div>




</div>

<?php get_footer(); ?>