<?php

function dotscott_theme() {
    wp_enqueue_script( 'dotscott_js', get_theme_file_uri('/js/main.js'), array('jquery'), null, true );
    wp_enqueue_style( 'dotscott_custom_style', get_theme_file_uri('/css/main.css'), NULL, microtime() );
    wp_enqueue_style( 'dotscott_main_style', get_stylesheet_uri(), NULL, microtime() );
    wp_enqueue_style( 'custom-font', '//fonts.googleapis.com/css?family=Pacifico' );
    wp_enqueue_style( 'custom-font-two', '//fonts.googleapis.com/css?family=Oxygen:300,400' );
    wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/releases/v5.0.8/js/all.js' );
}

add_action( 'wp_enqueue_scripts', 'dotscott_theme' );

function dotscott_features() {
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    add_theme_support( 'post-thumbnails' );
}


add_action( 'after_setup_theme', 'dotscott_features' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<div class="blog__button"><a href="%1$s">%2$s
    <button>Read More
                 </button></a></div>',
        get_permalink( get_the_ID() ),
        __( '', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



