<?php


function firsttheme_widgets_init() {
    register_sidebar(array(
        'id'            => 'primary',
        'name'          => __('Primary Sidebar', 'theme_name'),
        'description'   => __('A short description of the sidebar.'),
        'before_widget'  => '<div class="widget card rounded-0 mb-3"><div class="card-body">',
        'after_widget'   => "</div></div>",
        'before_title'  => '<h2 class="h4 mb-3">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'firsttheme_widgets_init');




function firsttheme_footer_widgets() {
    $footer_layout = '3,3,3,3';
    $columns = explode(',', $footer_layout);
    $color_mode = 'light';

    foreach ($columns as $i => $col) {
        register_sidebar(array(
            'id'            => 'footer-widget-' . $i + 1,
            'name'          => sprintf(__('Footer widget %s', 'theme_name'), $i + 1),
            'description'   => __('Footer widget column'),
            'before_widget'  => '<div class="widget card rounded-0 mb-3"><div class="card-body">',
            'after_widget'   => "</div></div>",
            'before_title'  => '<h2 class="h4 mb-3">',
            'after_title'   => '</h2>',
        ));
    }
}
add_action('widgets_init', 'firsttheme_footer_widgets');
