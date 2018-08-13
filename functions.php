<?php
 
function agmaTheme_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'agmaTheme-style', get_stylesheet_uri(), $dependencies ); 
}
 
function agmaTheme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('boot1', get_template_directory_uri().'/bootstrap/js/jquery-3.3.1.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script('boot2', get_template_directory_uri().'/bootstrap/js/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.1', true );

}


function agmaTheme_wp_setup() {
    add_theme_support( 'title-tag' );
}
 
function agmaTheme_custom_new_menu() {
    register_nav_menu('main_nav',__( 'Menu One' ));
}

function agmaTheme_setup() {

    $defaults = array(
        'height'      => 160,
        'width'       => 130,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'Agma', 'Agma ASSURANCE' ),
    );
    add_theme_support( 'custom-logo' );
}

add_action( 'wp_enqueue_scripts', 'agmaTheme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'agmaTheme_enqueue_scripts' );
add_action( 'after_setup_theme', 'agmaTheme_wp_setup' );
add_action( 'init', 'agmaTheme_custom_new_menu' );
add_action( 'after_setup_theme', 'agmaTheme_setup' );

?>