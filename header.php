<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="container shadow p-3 mb-2 bg-white rounded mt-3 " role="banner">
      
      <div class="row">   
         <div class="col"> 
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
         </div>
 
         <div  class="col-auto">
         <?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav' ) ); ?>
             <div class="text-right mr-3 mt-1">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/facebook.png" class="img-responsive mt-1">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/linkedin.png" class="img-responsive mt-1">
             </div>
             <div class="mt-2">
             <?php
                    get_search_form();
                   ?>

             </div> 
         </div>
      </div>
      <div class="row mt-1">
         <div class="col-12 text-center">
         <?php wp_nav_menu( array( 'theme_location' => 'main_nav2', 'menu_class' => 'sf-menu d-flex justify-content-center' ) ); ?>
         </div>
      </div>   
   </header>

