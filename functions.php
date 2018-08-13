<?php
 
function agmaTheme_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_register_style('ionic', get_template_directory_uri() . '/assets/icon/font/css/open-iconic-bootstrap.css' );
    wp_register_style('superfish', get_template_directory_uri() . '/assets/css/superfish.css' );
    wp_register_style('superfish-navbar', get_template_directory_uri() . '/assets/css/superfish-navbar.css' );
    wp_register_style('megafish', get_template_directory_uri() . '/assets/css/megafish.css' );

    $dependencies = array('bootstrap','ionic','superfish','superfish-navbar','megafish');
    wp_enqueue_style( 'agmaTheme-style', get_stylesheet_uri(), $dependencies ); 
}
 
function agmaTheme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('boot1', get_template_directory_uri().'/bootstrap/js/jquery-3.3.1.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script('boot2', get_template_directory_uri().'/bootstrap/js/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.1', true );
   
}

function agmaTheme_load_superfish_scripts(){
    wp_enqueue_script('superfish', get_template_directory_uri().'/assets/js/superfish.js');
    wp_enqueue_script('supersub', get_template_directory_uri().'/assets/js/supersubs.js');

}


function agmaTheme_wp_setup() {
    add_theme_support( 'title-tag' );
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


function agmaTheme_custom_new_menu() {
    register_nav_menus(
        array(
            'main_nav'=>__( 'Menu One' ),
            'main_nav2'=>__( 'Menu Two' )
        )
        
    
    );
}

function agmaTheme_start_superfish() { ?>
	
	<script type="text/javascript">
		jQuery( function( $ ) {
			$( document ).ready( function() {
				$('ul.sf-menu').supersubs( {
					minWidth   : 15, // minimum width of sub-menus in em units
					maxWidth   : 20, // maximum width of sub-menus in em units
					extraWidth : 1   // extra width can ensure lines don't sometimes turn over
				} ).superfish();
			} );
		} );
	</script>

<?php }

add_theme_support( 'html5',array('search-form') );

add_action( 'wp_enqueue_scripts', 'agmaTheme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'agmaTheme_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'agmaTheme_load_superfish_scripts' );
add_action( 'after_setup_theme', 'agmaTheme_wp_setup' );
add_action( 'init', 'agmaTheme_custom_new_menu' );
add_action( 'after_setup_theme', 'agmaTheme_setup' );



add_action( 'wp_footer', 'agmaTheme_start_superfish' );

?>