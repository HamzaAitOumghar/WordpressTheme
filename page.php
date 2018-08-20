<?php get_header(); ?>


<div class="container shadow p-2 mb-2 bg-white rounded">

<div class="row">

 <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/demmanderDevis.jpg" class="img-fluid rounded "/>
    </div>
    <div class="col-8 ">    
<div class="shadow-sm bg-light rounded mb-2">


    <div class="breadcrumbs p-3" typeof="BreadcrumbList" vocab="https://schema.org/">
              <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
   
</div>


</div>  


    <div class="shadow-sm bg-light rounded">
    <?php 
        $id=get_the_ID();

        if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            
                        <div class="display-4 p-1 text-primary text-center"> <?php echo get_the_title($id); ?> </div>
              <?php
                      the_content();
                      
                    
                    endwhile; 
         else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php 
        endif; 
    ?>
</div>
        

    </div>

</div>

</div>
<?php get_footer(); ?>