<?php

$page = "Connexion";

include 'inc/header-1.php'
?>

<!-- jp login wrapper start -->
<div class="login_section">
    <!-- login_form_wrapper -->
    <div class="login_form_wrapper">
        <div class="container ">
            <div class="row ">
                <div class="col-md-8 col-md-offset-2 shadow-lg pb-5">
                    <!-- login_wrapper -->
                    <h1>Connectez vous avec vos identifiants</h1>
                    <div class="login_wrapper">
                        <div class="formsix-pos">
                            <div class="form-group i-email">
                                <input type="email" class="form-control" required="" id="email2" placeholder="johnsmith@example.com*">
                            </div>
                        </div>
                        <div class="formsix-e">
                            <div class="form-group i-password">
                                <input type="password" class="form-control" required="" id="password2" placeholder="Tapez votre mot de passe ici">
                            </div>
                        </div>
                        <div class="login_remember_box">
                            <label class="control control--checkbox">se reppeler de moi
                                <input type="checkbox">
                                <span class="control__indicator"></span>
                            </label>
                            <a href="#" class="forget_password">
                                Mot de passe
                            </a>
                        </div>
                        <div class="login_btn_wrapper">
                            <a href="#" class="btn btn-primary login_btn"> Connexion </a>
                        </div>
                        <div class="login_message">
                            <p>Pas de compte ? <a href="#"> Inscrivez-vous</a> </p>
                        </div>
                    </div>
                    <p>In case you are using a public/shared computer we recommend that
                        you logout to prevent any un-authorized access to your account</p>
                    <!-- /.login_wrapper-->
                </div>
            </div>
        </div>
    </div>
    <!-- /.login_form_wrapper-->
</div>
<!-- jp login wrapper end -->

<?php include('inc/footer.php') ?>