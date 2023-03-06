<?php

require get_template_directory() . '/inc/function-admin.php';

 
// Custom image sizes
function splay_custom_thumbnail_size(){
    add_image_size( 'case-small', 645, 377 );
    add_image_size( 'case-medium', 916, 530 );
    add_image_size( 'case-large', 1340, 643 ); 
}
add_action( 'after_setup_theme', 'splay_custom_thumbnail_size' );

// Adds dynamic title tag support connected to wordpress's page or post title
function splay_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'splay_theme_support');

function splay_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('splay-style', get_template_directory_uri() . '/style.css', array('splay-bootstrap'), $version, 'all');
    wp_enqueue_style('splay-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css', array(), '4.3.1', 'all');
}

add_action('wp_enqueue_scripts', 'splay_register_styles');

function splay_register_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('bootstrap-jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', false);
    wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', array(), '1.14.7', false);
    wp_enqueue_script('bootstrap-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '4.3.1', false);
    wp_enqueue_script('splay-main', get_template_directory_uri() . 'assets/js/main.js', array(), '4.3.1', false);
}

add_action('wp_enqueue_scripts', 'splay_register_scripts');

?>