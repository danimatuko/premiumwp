<?php

function firsttheme_post_meta() {
    $author_url = esc_attr(get_author_posts_url(get_the_author_meta('ID')));
    $author_name = esc_html(get_the_author());
    $post_date =  esc_attr(get_the_date());

    echo
    <<<POSTMETA
        <div>
            Posted on:
            <time datetime="$post_date">
                $post_date 
            </time>
            By:
            <span>
                <a href="{$author_url}">
                    $author_name
                </a>
            </span>
        </div>
        POSTMETA;
}



function firsttheme_readmore_link() {
    $primalink = get_the_permalink();
    $title = get_the_author();

    echo
    <<<READMORE
        <a href="$primalink">
            Read More <span class="u-screen-reader-text">About
            <span>$title</span>
        </a>
        READMORE;
}


function _themename_delete_post() {
    $url = add_query_arg([
        'action' => '_themename_delete_post',
        'post' => get_the_ID(),
        'nonce' => wp_create_nonce('_themename_delete_post' . get_the_ID())
    ], home_url());

    if (current_user_can('delete_post', get_the_ID())) {
        return "<a href='" . esc_url($url) . "'>" . esc_html__('Delete Post', '_themename') . "</a>";
    };
}
