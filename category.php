<?php get_header(); ?>


<div class="container shadow p-2 mb-2 bg-white rounded">

    <div class="row">

        <div class="col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/demmanderDevis.jpg" class="img-fluid rounded "/>
        </div>
        
        <div class="col-8 ">    
                <div class="shadow-sm bg-light rounded mb-2">
                <h2 class="display-4 text-center text-primary" style="font-size:35px;">Actualités : </h2>

                <?php 
                    global $more;
                    $args = array ( 'category' => 193, 'posts_per_page' => 5);
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) :	setup_postdata($post);
                 
                    ?>
                    
                    <div class="card m-3">
                        <div class="card-header">
                            <?php the_title(); ?>
                        </div>
                        <div class="card-body">         
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6"><?php the_date(); ?></div>
                                <div class="col-6 text-right">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"> <span class="oi oi-plus"></span> Voir l'article </a>  
                                </div>
                            </div>
                        </div>
                        
                    </div>

                



                    

                <?php endforeach; ?>


                    <div class="d-flex justify-content-center m-1 p-1">
                        <?php agmaTheme_numeric_posts_nav(); ?>
                    </div>


                </div>
                
        </div>

    </div>

</div>
<?php get_footer(); ?>