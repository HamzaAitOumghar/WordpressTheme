<?php get_header(); ?>


<div class="container shadow p-2 mb-2 bg-white rounded">

<div class="row">

 <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/demmanderDevis.jpg" class="img-fluid rounded "/>
    </div>
    <div class="col-8 ">    
        <div class="shadow-sm bg-light rounded mb-2">
                <h2 class="display-4 text-center text-primary" style="font-size:35px;">Recherche : </h2>

                <div class="col-md-10 mx-auto p-2">
                        <?php
                            get_search_form();
                        ?>
                </div>

            <h2 class="display-4 text-left text-primary p-1" style="font-size:45px;">Résultats trouvés : </h2>

            <div>

<?php if ( have_posts() ) : ?>

            <div class="page-header">
                <h1 class="page-title"><?php printf( __( 'résultats trouvés pour : %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>
            

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('content', 'search' ); ?>

            <?php endwhile; ?>


            <?php else : ?>

            <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>
            </div>


        </div>
        <div class="d-flex justify-content-center m-1 p-1">
            <?php agmaTheme_numeric_posts_nav(); ?>
        </div>



        
    </div>

</div>

</div>
<?php get_footer(); ?>