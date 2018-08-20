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
            'main_nav2'=>__( 'Menu Two' ),
            'main_nav3'=>__( 'Menu Footer' )
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

function posts_link_attributes() {
    return 'class="page-link"';
}

function posts_link_next_class($format){
    $format = str_replace('href=', 'class="page-link" href=', $format);
    return $format;
}




function agmaTheme_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<nav aria-label="pagination"><ul class="pagination">' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="page-item page-link">%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s class="page-item"><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li class="page-item">…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active page-item"' : '';
        printf( '<li%s><a href="%s" class="page-link" >%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li class="page-item">…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s class="page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="page-item page-link">%s</li>' . "\n",  get_next_posts_link() );
 
    echo '</ul></nav>' . "\n";
 
}





add_theme_support( 'html5',array('search-form') );

add_action( 'wp_enqueue_scripts', 'agmaTheme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'agmaTheme_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'agmaTheme_load_superfish_scripts' );
add_action( 'after_setup_theme', 'agmaTheme_wp_setup' );
add_action( 'init', 'agmaTheme_custom_new_menu' );
add_action( 'after_setup_theme', 'agmaTheme_setup' );



add_action( 'wp_footer', 'agmaTheme_start_superfish' );

add_filter('get_previous_posts_link', 'posts_link_attributes');
add_filter('get_next_posts_link', 'posts_link_next_class');

?>