<article class="card border-0 rounded-0 mb-3 shadow-sm p-3 bg-body-tertiary ">
    <div class="card-body">

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
        <?php echo _themename_delete_post(); ?>
    </div>
</article>