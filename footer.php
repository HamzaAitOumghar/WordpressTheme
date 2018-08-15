
 
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
                            
                            <div class="col-3">

                            <h6>Assurance particuliers : </h6>
                                
                            <ul>
                                    <li><a href="#">Assurance Automobile</a></li>
                                    <li><a href="#">Assurance Assistance</a></li>
                                    <li><a href="#"> Assurance Maladie, incapacité, décès</a></li>
                                    <li><a href="#">Assurance Multirisques habitation</a></li>
                                    <li><a href="#">Assurance Individuelle accidents</a></li>
                                    <li><a href="#">Assurance Retraite</a></li>
                                </ul>

                            </div>
                            <div class="col-3">
                            <h6>Assurance entreprises :</h6>
                            <ul>
                                <li>  <a href="#">Multirisques industrielle</a></li>
                                <li>  <a href="#">Pertes d‘exploitation</a></li>
                                <li>  <a href="#">Bris de machines</a></li>
                                <li>  <a href="#">Vol</a></li>
                                <li>  <a href="#">Responsabilité Civile</a></li>
                                <li>  <a href="#">Responsabilité Décennale</a></li>
                                <li>  <a href="#">Contrat d'assistance</a></li>
                                

                            </ul>

                            </div>
                            <div class="col-3">
                                <h6> &nbsp;</h6>
                                <ul>
                                <li>  <a href="#">Assurance facultés maritimes</a></li>
                                <li>  <a href="#">Assurances Marchandises Transportées</a></li>
                                <li>  <a href="#">Assurance Responsabilité Mandataires sociaux</a></li>
                                <li>  <a href="#">Assurance Transport</a></li>
                                <li>  <a href="#">Assurance Automobile</a></li>
                                <li>  <a href="#">Assurance Assistance</a></li>
                                <li>  <a href="#">Assurance Maritime</a></li>
                                </ul>

                            </div>
                            <div class="col-3">
                            <h6> Assurances de personnes :</h6>

                                <ul>
                                    <li>  <a href="#"> Assurance Décès</a></li>
                                    <li>   <a href="#">Assurance Accidents du travail</a></li>
                                    <li> <a href="#"> Assurance Maladies professionnelles</a></li>
                                    <li>  <a href="<?php echo get_permalink(1847) ?>">Assurance Retraite</a></li>
                                </ul>


                            </div>
                            
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