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

add_theme_support( 'post-thumbnails' );

register_nav_menus(
    array(
        'main-menu' => 'Main menu location',
        'footer-menu' => 'Footer menu location'
    )
);

function admin_bar(){

    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );