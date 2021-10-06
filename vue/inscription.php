<?php include('../modele/server.php') ?>
<?php
include_once "../Vue/header.php";
?>

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Inscription</h2>
        </div>
        <div class="col-md- col-lg-9 offset-3">
            <form class="needs-validation" novalidate="" method="post" action="inscription.php">
                <div class="row">
                    
                    <div class="col-sm-4">
                        <label for="firstName" class="form-label"></label>
                        <input type="text" class="form-control" id="firstName" placeholder="Prénom" value="" required="" name="firstName">
                        <div class="invalid-feedback">
                            Ce champs est important
                        </div>
                    </div>
               
                    <div class="col-sm-4 ">
                        <label for="lastName" class="form-label"></label>
                        <input type="text" class="form-control" id="lastName" placeholder="Nom" value="" required="" name="lastName">
                        <div class="invalid-feedback">
                            Ce champs est important
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-4">
                        <label for="email" class="form-label"> <span class="text-muted"></span></label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        <div class="invalid-feedback">
                            Veuillez entrer une adresse mail valide.
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="tel" class="form-label"> <span class="text-muted"></span></label>
                        <input type="tel" class="form-control" id="tel"  placeholder="Téléphone" name="phone">
                        <div class="invalid-feedback">
                            Veuillez entrer votre numéro de téléphone.
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                <div class="col-4">
                        <label for="age" class="form-label"><span class="text-muted"></span></label>
                        <input type="age" class="form-control" placeholder="Age" id="age" name="age">
                        <div class="invalid-feedback">
                            Veuillez entrer votre âge
                        </div>
                    </div>
               
                    <div class="col-md-4">
                        <label for="country" class="form-label"></label>
                        <input type="text" class="form-control" placeholder="Ville" id="ville" name="address_2">
                        <div class="invalid-feedback">
                            Veuillez choisir une Ville
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-4">
                        <label for="firstName"></label>
                        <input type="password" class="form-control" id="firstName" placeholder="Mot de passe" name="psw" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un mot de passe valide
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="firstName"></label>
                        <input type="password" class="form-control" id="lastName" placeholder="Confirmez votre mot de passe" name="psw-repeat" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un mot de passe valide
                        </div>
                    </div>
                </div>
                   
                   
                    <!-- <div class="col-12">
                        <label for="address" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="address" name="address_1">
                        <div class="invalid-feedback">
                            Veuillez entrer votre adresse
                        </div>
                    </div> -->
                    
                    <!--                    <div class="col-md-4">-->
                    <!--                        <label for="state" class="form-label">Pays</label>-->
                    <!--                        <input type="text" class="form-control" id="country" name="country">-->
                    <!--                        <div class="invalid-feedback">-->
                    <!--                            Veuillez choisir un Pays-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="offset-2 col-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit" name="reg_user">S'enregistrer</button>
                    </div>          
            </form>

            <div class="container_signin">
                <p>Déjà inscrit ? <a href="login.php">Connexion</a></p>
            </div>
        </div>
    </main>
</div>
<?php
include_once "../Vue/footer.php";
?>