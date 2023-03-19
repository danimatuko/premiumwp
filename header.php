<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar py-5 navbar-expand-lg navbar-dark bg-dark">

            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } ?>

                    <a class="navbar-brand text-primary" style="<?php echo 'color:' . get_theme_mod('_themename_accent_color'); ?>" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker(),
                    ));
                    ?>

                </div>
                <div>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </header>