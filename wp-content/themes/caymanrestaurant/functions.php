<?php 

require_once('includes/wp_bootstrap_navwalker.php');

define('HOMELINK', site_url('/'));
define('PATH', get_template_directory_uri());
define('IMAGES', get_template_directory_uri()."/img" );


//Register menus
register_nav_menus( array(
'primary_menu' => 'Primary Menu',
'secondary_menu' => 'Secondary Menu',
) );

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
} 
function register_custom_widget_area() {
    register_sidebar(
                        array(
                        'id' => 'new-widget-area',
                        'name' => esc_html__( 'My new widget area', 'theme-domain' ),
                        'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget' => '</div>',
                        'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
                        'after_title' => '</h3></div>'
                        )
    );
}
add_action( 'widgets_init', 'register_custom_widget_area' );

/*function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );*/

//Add styles and scripts
function kr_scripts() {
    

    //STYLES

    wp_register_style( 'jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',array(), null  );   
    wp_enqueue_style( 'jquery-ui-css' );

    wp_register_style( 'bootstrap', PATH.'/css/bootstrap.min.css',array(), null  );   
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'styles', get_stylesheet_uri(),array(), null  );   
    wp_enqueue_style( 'styles' );    



    wp_register_script( 'jquery-version', 'https://code.jquery.com/jquery-1.12.4.js', array('jquery'),null,true);
    wp_enqueue_script('jquery-version');

    /*wp_register_script( 'jquery-UI', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'),null,true);
    wp_enqueue_script('jquery-UI');*/

    //wp_register_script( 'jquery-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'),null,true);
    //wp_enqueue_script('jquery-popper');

    wp_register_script( 'bootstrap-js', PATH.'/js/bootstrap.bundle.min.js', array('jquery'),null,true);
    wp_enqueue_script('bootstrap-js');


    wp_register_script( 'app', PATH.'/js/main.js', array('jquery'),null,true);
    wp_enqueue_script('app');


}
add_action( 'wp_enqueue_scripts', 'kr_scripts', 1 );
