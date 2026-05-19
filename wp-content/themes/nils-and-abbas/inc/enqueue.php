<?php

function nanda_scripts()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('nanda-style', get_stylesheet_uri(), array(), $version);

    wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), array('nanda-style'), '5.3', 'all');

    wp_enqueue_style('nanda-ui', get_theme_file_uri('/assets/css/nanda.css'), array('nanda-style'), time());

    wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array('jquery'), '5.3', true);

    wp_enqueue_script('custom-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), time(), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'nanda_scripts');
