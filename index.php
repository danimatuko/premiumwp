<?php get_header() ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="card rounded-0 mb-3">
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
                    </div>
                <?php endwhile;
            else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            <div class="py-2">
                <?php the_posts_pagination(); ?>
            </div>
        </div>

        <div class="col-md-4"><?php get_sidebar() ?></div>
    </div>




</div>

<?php get_footer(); ?>