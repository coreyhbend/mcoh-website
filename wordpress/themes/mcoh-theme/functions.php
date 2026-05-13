<?php
/**
 * MCOH Theme Functions
 */

// Theme setup
function mcoh_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'mcoh' ),
        'footer'  => __( 'Footer Navigation', 'mcoh' ),
    ));
}
add_action( 'after_setup_theme', 'mcoh_setup' );

// Enqueue styles and scripts
function mcoh_scripts() {
    wp_enqueue_style(
        'mcoh-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap',
        array(),
        null
    );
    wp_enqueue_style( 'mcoh-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_style( 'mcoh-main', get_template_directory_uri() . '/assets/css/main.css', array( 'mcoh-style' ), '1.0.0' );
    wp_enqueue_script( 'mcoh-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mcoh_scripts' );

// Remove default WP styles we don't need on front page
function mcoh_dequeue_block_styles() {
    if ( is_front_page() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
    }
}
add_action( 'wp_enqueue_scripts', 'mcoh_dequeue_block_styles', 100 );
