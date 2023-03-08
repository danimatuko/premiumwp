<?php


function themename_widgets_init() {
    register_sidebar(array(
        'id'            => 'primary',
        'name'          => __('Primary Sidebar', 'theme_name'),
        'description'   => __('A short description of the sidebar.'),
        'before_title'  => '<h3 class="display-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'themename_widgets_init');
