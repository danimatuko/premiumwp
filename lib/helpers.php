<?php

function firsttheme_post_meta() {
    $author_url = get_author_posts_url(get_the_author_meta('ID'));
    $author_name = get_the_author();
    $post_date =  get_the_date();

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
