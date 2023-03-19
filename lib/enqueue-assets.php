<?php

function firsttheme_assets() {
    wp_enqueue_style('fontawsome_icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', array(), '6.3.0', 'all');

    wp_enqueue_style('firsttheme_stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '5.0.2', 'all');
    wp_enqueue_style('firsttheme_custom', get_template_directory_uri() . '/dist/assets/css/custom.css', array(), '5.0.2', 'all');
}

add_action('wp_enqueue_scripts', 'firsttheme_assets');
