<article class="card rounded-0 mb-3">
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
    </div>
</article>