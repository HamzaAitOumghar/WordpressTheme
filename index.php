<?php get_header(); ?>


<div class="container shadow p-2 mb-2 bg-white rounded">

<div class="row">

    <div class="col-md-8">
            <?php 
             echo do_shortcode('[smartslider3 slider=2]');
        ?>

       <div class="row mt-1">
            <div class="col-5">
             
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Mot du Président</h5>
                    <p class="card-text">Bienvenue sur le site d'AGMA , votre assureur conseil de référence !</p>
                  <div class="text-right">
                    <a href="#" class="btn btn-primary"> <span class="oi oi-plus"></span> Lire plus</a>
                  </div>
                  </div>
                </div>
                <div class="card mt-1">
                      <div class="card-header">Actualités</div>
                      <div class="card-body text-center">
                        
                          <?php 
                              echo do_shortcode('[smartslider3 slider=3]');
                          ?>


                      <div class="text-right mt-2">
                           <a href="<?php echo get_category_link(193) ; ?>" class="btn btn-primary"> <span class="oi oi-plus"></span> Tous les articles</a>  
                      </div>
                      </div>
                      
                </div>

            </div>
            <div class="col-7 " >
              <ul class="nav nav-tabs">
                  <li class="nav-item" >
                    <a class="nav-link active" data-toggle="tab" href="#home" style="background-color:#B3DD59; color:white;font-weight:bold;width:140px;text-align:center;">Conseils en assurance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1" style="background-color:#1a97d1; color:white;font-weight:bold;width:140px;text-align:center;">L’essentiel de l’assurance</a>
                  </li>
                
              </ul>

                <div class="tab-content">
                      <div class="tab-pane container active" id="home" style="background-color:#B3DD59;height:250px;">
                        <h6>Conseils en assurance</h6>
                        <a href="#"><span class="oi oi-caret-right" aria-hidden="true"> </span> Habitations et moyens de protection contre le feu</a>
                          <div>
                                Voici quelques conseils simples pour se protéger contre les incendies : Veillez à ce...
                          </div>
                          <a href="#"><span class="oi oi-caret-right" aria-hidden="true"> </span> Conseils et prevention sur la route des vacances</a>
                          <div>
                                Pour éviter les surprises de dernière minute et partir dans les meilleures...
                          </div>
                      </div>
                      <div class="tab-pane container fade" id="menu1" style="background-color:#1a97d1;height:250px;">
                        <h6>Lexique essentiel de l'assurance</h6>
                        <a href="#" style="color:white;"><span class="oi oi-caret-right" aria-hidden="true"> </span> Lexique</a>
                        <div>
                        ACCESSOIRES      Somme due par le souscripteur à l'assureur en sus de la...
                        </div>
                        
                      </div>
                </div>
              </div>
              
       </div>

    </div>
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
    

</div>

</div>
<?php get_footer(); ?>