<?php
function load_css()
{
    wp_register_style(
        'main',
        get_template_directory_uri() . '/css/main.css',
        [],
        1,
        'all'
    );
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

register_nav_menus(
    array(
        'main-menu' => 'Main menu location',
        'footer-menu' => 'Footer menu location'
    )
);