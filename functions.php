<?php

/* Styles and scripts load */

function simple_script_and_style_load() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
    
    /* If you have script - add after url -> array('jquery'), '1.0', true  */
    wp_enqueue_script('nav', get_template_directory_uri(). '/js/nav.js', array('jquery'), '1.0', true );
    wp_enqueue_style( 'bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'); 
    wp_enqueue_style( 'fontello', get_stylesheet_directory_uri(). '/css/fontello.css');
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'Open-Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
}

add_action( 'wp_enqueue_scripts', 'simple_script_and_style_load' );

/* Styles and scripts load Ends */


/* Theme support functions */

add_theme_support( 'html5', array('search-form') );

/* Theme support functions Ends*/

/* Header menu register */

register_nav_menu( 'menu', 'Location: on Top (Header Menu)' );

/* Header menu register Ends*/
?>