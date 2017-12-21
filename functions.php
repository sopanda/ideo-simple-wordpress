<?php
/* Wordpress features */

function wp_theme_setup() {

    load_theme_textdomain( "simple" );

    add_theme_support( "title-tag"); /* now we can live without "title in header" */

    add_theme_support( "custom-logo", array(
        'height' => 139,
        'width' => 189
    ));

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

/* Header menu register Ends*/

/*
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        SLIDER BLOCK
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

/*First slide*/
function theme_slug_home_img_slide_1( $wp_customize ) {
    $wp_customize->add_section(
    'home_slide_img_one',
        array(
            'title' => 'Home Image Slide 1',
            'description' => 'This section updates all information pertaining to the first image in the slideshow on the home page',
            'priority' => 1,
    ));

/* USE FUNCTIONALITY within the new section we created. */
$wp_customize->add_setting( 'theme_slug_slide_img_upload_one' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'theme_slug_slide_img_upload_one', array(
       'label'       => __( 'Upload image for first slide in sequence:', 'theme_slug' ),
       'section'     => 'home_slide_img_one',
       'settings'    => 'theme_slug_slide_img_upload_one',
       'description' => 'Upload your first slider image here.'
)));

/* FOR TITLE */
$wp_customize->add_setting( 'theme_slug_slide_title_1', array(
    'default' => 'No Title Text Has Been Entered',
    'sanitize_callback' => 'sanitize_headline_one_text',
)); 

function sanitize_headline_one_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

$wp_customize->add_control( 'theme_slug_slide_title_1', array(
    'type'    => 'text',
    'label'   => __( 'Heading Text Here:', 'theme_slug' ),
    'section' => 'home_slide_img_one'
));

/* FOR DESCTIPTIOM */
$wp_customize->add_setting( 'theme_slug_slide_text_1', array(
    'default' => 'No Descriptive Text Has Been Entered',
    'sanitize_callback' => 'sanitize_slide_one_descriptive_text'
));
function sanitize_slide_one_descriptive_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
} 
$wp_customize->add_control( 'theme_slug_slide_text_1', array(
    'label'    => __( 'Descriptive Text Here:', 'theme_slug' ),
    'section'  => 'home_slide_img_one',
    'settings' => 'theme_slug_slide_text_1',
    'type'     => 'text'
));
}
/* bring the function to life */
add_action( 'customize_register', 'theme_slug_home_img_slide_1' );

/*First Slide ENDS*/

/*Second Slide*/

function theme_slug_home_img_slide_2( $wp_customize ) {
    $wp_customize->add_section(
    'home_slide_img_two',
        array(
            'title' => 'Home Image Slide 2',
            'description' => 'This section updates all information pertaining to the second image in the slideshow on the home page',
            'priority' => 1,
    ));

/* USE FUNCTIONALITY within the new section we created. */
$wp_customize->add_setting( 'theme_slug_slide_img_upload_two' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'theme_slug_slide_img_upload_two', array(
       'label'       => __( 'Upload image for second slide in sequence:', 'theme_slug' ),
       'section'     => 'home_slide_img_two',
       'settings'    => 'theme_slug_slide_img_upload_two',
       'description' => 'Upload your second slider image here.'
)));


/* FOR TITLE */
$wp_customize->add_setting( 'theme_slug_slide_title_2', array(
    'default' => 'No Title Text Has Been Entered',
    'sanitize_callback' => 'sanitize_headline_two_text',
)); 

function sanitize_headline_two_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

$wp_customize->add_control( 'theme_slug_slide_title_2', array(
    'type'    => 'text',
    'label'   => __( 'Heading Text Here:', 'theme_slug' ),
    'section' => 'home_slide_img_two'
));

/* FOR DESCTIPTIOM */
$wp_customize->add_setting( 'theme_slug_slide_text_2', array(
    'default' => 'No Descriptive Text Has Been Entered',
    'sanitize_callback' => 'sanitize_slide_two_descriptive_text'
));
function sanitize_slide_two_descriptive_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
} 
$wp_customize->add_control( 'theme_slug_slide_text_2', array(
    'label'    => __( 'Descriptive Text Here:', 'theme_slug' ),
    'section'  => 'home_slide_img_two',
    'settings' => 'theme_slug_slide_text_2',
    'type'     => 'text'
));
} 

/* bring the function to life */
add_action( 'customize_register', 'theme_slug_home_img_slide_2' );

/*Second Slide ENDS*/

/* Third Slide */

function theme_slug_home_img_slide_3( $wp_customize ) {
    $wp_customize->add_section(
    'home_slide_img_third',
        array(
            'title' => 'Home Image Slide 3',
            'description' => 'This section updates all information pertaining to the third image in the slideshow on the home page',
            'priority' => 1,
    ));

/* USE FUNCTIONALITY within the new section we created. */
$wp_customize->add_setting( 'theme_slug_slide_img_upload_third' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'theme_slug_slide_img_upload_third', array(
       'label'       => __( 'Upload image for third slide in sequence:', 'theme_slug' ),
       'section'     => 'home_slide_img_third',
       'settings'    => 'theme_slug_slide_img_upload_third',
       'description' => 'Upload your third slider image here.'
)));


/* FOR TITLE */
$wp_customize->add_setting( 'theme_slug_slide_title_3', array(
    'default' => 'No Title Text Has Been Entered',
    'sanitize_callback' => 'sanitize_headline_third_text',
)); 

function sanitize_headline_third_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

$wp_customize->add_control( 'theme_slug_slide_title_3', array(
    'type'    => 'text',
    'label'   => __( 'Heading Text Here:', 'theme_slug' ),
    'section' => 'home_slide_img_third'
));

/* FOR DESCTIPTIOM */
$wp_customize->add_setting( 'theme_slug_slide_text_3', array(
    'default' => 'No Descriptive Text Has Been Entered',
    'sanitize_callback' => 'sanitize_slide_third_descriptive_text'
));
function sanitize_slide_third_descriptive_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
} 
$wp_customize->add_control( 'theme_slug_slide_text_3', array(
    'label'    => __( 'Descriptive Text Here:', 'theme_slug' ),
    'section'  => 'home_slide_img_third',
    'settings' => 'theme_slug_slide_text_3',
    'type'     => 'text'
));
} 

/* bring the function to life */
add_action( 'customize_register', 'theme_slug_home_img_slide_3' );


/* Third Slide ENDS*/

/* Fourth Slide */

function theme_slug_home_img_slide_4( $wp_customize ) {
    $wp_customize->add_section(
    'home_slide_img_fourth',
        array(
            'title' => 'Home Image Slide 4',
            'description' => 'This section updates all information pertaining to the fourth image in the slideshow on the home page',
            'priority' => 1,
    ));

/* USE FUNCTIONALITY within the new section we created. */
$wp_customize->add_setting( 'theme_slug_slide_img_upload_fourth' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'theme_slug_slide_img_upload_fourth', array(
       'label'       => __( 'Upload image for fourth slide in sequence:', 'theme_slug' ),
       'section'     => 'home_slide_img_fourth',
       'settings'    => 'theme_slug_slide_img_upload_fourth',
       'description' => 'Upload your fourth slider image here.'
)));


/* FOR TITLE */
$wp_customize->add_setting( 'theme_slug_slide_title_4', array(
    'default' => 'No Title Text Has Been Entered',
    'sanitize_callback' => 'sanitize_headline_fourth_text',
)); 

function sanitize_headline_fourth_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

$wp_customize->add_control( 'theme_slug_slide_title_4', array(
    'type'    => 'text',
    'label'   => __( 'Heading Text Here:', 'theme_slug' ),
    'section' => 'home_slide_img_fourth'
));

/* FOR DESCTIPTIOM */
$wp_customize->add_setting( 'theme_slug_slide_text_4', array(
    'default' => 'No Descriptive Text Has Been Entered',
    'sanitize_callback' => 'sanitize_slide_fourth_descriptive_text'
));
function sanitize_slide_fourth_descriptive_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
} 
$wp_customize->add_control( 'theme_slug_slide_text_4', array(
    'label'    => __( 'Descriptive Text Here:', 'theme_slug' ),
    'section'  => 'home_slide_img_fourth',
    'settings' => 'theme_slug_slide_text_4',
    'type'     => 'text'
));
} 

/* bring the function to life */
add_action( 'customize_register', 'theme_slug_home_img_slide_4' );

/* Fourth Slide Ends*/

/*
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        SLIDER BLOCK ENDS
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

/* Now i will add widget support for theme */

/* Widget section ENDS */

?>