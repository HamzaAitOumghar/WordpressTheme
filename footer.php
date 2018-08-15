
 
<footer class="container shadow p-3 mb-2 bg-white rounded">

    <div class="row">

                <div class="col offset-10">
                    <a class="btn btn-primary dropdown-toggle btn-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Produits Agma
                    </a>
                </div>
                <div class="collapse mx-auto mt-1" id="collapseExample">
                    <div class="card card-body">
                        <div class="row">   
                        
                        </div>
                    </div>
                </div>


    </div>

    <div class="row mt-1">
            <div class="col">
            <?php wp_nav_menu( array( 'theme_location' => 'main_nav3', 'menu_class' => 'nav' ) ); ?>

            </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>