<?php
/* Wordpress features */

//Exclude pages from WordPress Search
if (!is_admin()) {
    function wpb_search_filter($query) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
            }
        return $query;
        }
    add_filter('pre_get_posts','wpb_search_filter');
}

/* extra search form */
function non_post_search_form( $form ) {
    $form = '<form role="search" method="get" action="'. home_url( '/' ) .'">';
    $form .= '<label class="sub-search-label">Spróbuj ponownie</label>';
    $form .= '<div class="form-group">';
    $form .= '<input name="s" class="form-control" type="text" placeholder="Search">';
    $form .= '<input type="submit" value="Szukaj" class="btn btn-primary sub-search-btn">';
    $form .= '</div>';
    $form .= '</form>';
    return $form;
}

function post_search_form( $form ) {
    $form = '<form role="search" class="form-inline" method="get" action="'. home_url( '/' ) .'">';
    $form .= '<div class="form-group">';
    $form .= '<input name="s" class="form-control" type="text" placeholder="Search">';
    $form .= '<input type="submit" value="Szukaj" class="btn btn-primary sub-search-btn">';
    $form .= '</div>';
    $form .= '</form>';
    return $form;
}

function wp_theme_setup() {

    load_theme_textdomain( "simple" );

    add_theme_support( "title-tag"); /* now we can live without "title in header" */
   
    add_theme_support( 'post-thumbnails' ); /*featured images*/

    add_theme_support( "custom-logo", array(
        'height' => 139,
        'width' => 189
    ));
    add_theme_support( 'widgets' );

    add_filter('carousel_slider_load_scripts', 'carousel_slider_load_scripts');
    function carousel_slider_load_scripts( $load_scripts ) {

        if ( is_front_page() ){
            return true;
        }

        return $load_scripts;
    }
}


add_action( "after_setup_theme", "wp_theme_setup");
/* Wordpress features END */


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
register_nav_menu( 'sidemenu', 'Location: on Left (Sidebar menu)' );

/* Header menu register Ends*/

?>