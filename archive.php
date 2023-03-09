<?php get_header() ?>

<div class="container py-5">
    <div class="row">
        <h1 class="mb-5"><?php the_archive_title() ?></h1>
        <div class="col-md-8">
            <!-- run the loop -->
            <?php get_template_part('loop', 'archive') ?>
            <div class="py-2">
                <?php the_posts_pagination(); ?>
            </div>
        </div>

        <div class="col-md-4"><?php get_sidebar() ?></div>
    </div>




</div>

<?php get_footer(); ?>