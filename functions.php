<?php

function twentytwenty_child_enqueue_styles() {
    $parenthandle = 'twentytwenty-style'; // This is 'twentytwenty-style' for the Twenty Twenty theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'twentytwenty-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    wp_enqueue_style( 'twentytwenty-child-theme-style', get_stylesheet_directory_uri() . '/css/theme.css',
    array(),  // if the theme code has a dependency, copy it to here
    $theme->get('Version') // this only works if you have Version in the style header
);
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_child_enqueue_styles' );

/**
 * Implement the Custom Header feature.
 */
require_once( get_stylesheet_directory(). '/inc/custom-header.php' );