<?php

function firsttheme_assets() {
    // wp_enqueue_style('bootstrap_stylesheet', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('firsttheme_stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '5.0.2', 'all');
}

add_action('wp_enqueue_scripts', 'firsttheme_assets');
