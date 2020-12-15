<?php

$page = "Profil du Candidat";

$nom = "Micaël Die";

$metier = "Ingénieur Informaticien";

$adress = "Ghana, Accra";

$img = "images/content/cp1.png";


include('inc/header-3.php');

?>

<!-- jp listing Single cont Wrapper Start -->


<div class="jp_listing_single_main_wrapper">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_listing_left_sidebar_wrapper shadow-lg">
                    <div class="jp_job_des">
                        <h2>Profil Personnel</h2>
                        <div class="container">
                            <div class="row" style="margin-bottom: -4%">
                                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                                    <p>Nom : <span class="font-weight-bold font-italic"><?= $nom ?></span> </p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <p>E-mail : <span class="font-weight-bold font-italic">vincent@ferie.me</span> </p>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: -4%">
                                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                                    <p>Sexe : <span class="font-weight-bold font-italic">Masculin</span> </p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <p>Date de Naissance : <span class="font-weight-bold font-italic">08-04-1984</span> </p>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: -4%">
                                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                                    <p>Dernier Diplôme : <span class="font-weight-bold font-italic">Master II en informatique</span> </p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <p>Niveau actuel: <span class="font-weight-bold font-italic">BAC + 5</span> </p>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: -4%">
                                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                                    <p>Numéro de Téléphone : <span class="font-weight-bold font-italic">+0 123456789 </span> </p>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p>Expérience professionnel: <span class="font-weight-bold font-italic">4 ans</span> </p>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: -4%">
                                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                                    <p>Domaine de formation : <span class="font-weight-bold font-italic">Informatique </span> </p>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p>Pays de résidence <span class="font-weight-bold font-italic">Ghana</span> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <div class="jp_cp_rd_wrapper">
                                        <ul>
                                            <li><a href="#" class="btn btn-block">&nbsp;Télécharger mon CV</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jp_job_res">
                        <h2>Me concernant</h2>
                        <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id
                            dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium pariatur dolorum corrupti hic commodi! Reprehenderit dignissimos quibusdam odit commodi numquam atque debitis officiis laudantium! Impedit modi molestias blanditiis accusamus distinctio! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp listing Single cont Wrapper End -->
<?php
include('inc/footer.php');
?>