<?php include('../modele/server.php') ?>


<html lang="fr">

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../vue/css/boostrap.css" media="screen" type="text/css"/>
    <link href="../vue/css/boostrap.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../vue/css/index.css">
</head>

<body>
<div class="container" id="101">
    <main>
        <div class="py-5 text-center">
            <h2>Inscription</h2>
        </div>
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" novalidate="" method="post" action="inscription.php">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required=""
                               name="firstName">
                        <div class="invalid-feedback">
                            Ce champs est important
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required=""
                               name="lastName">
                        <div class="invalid-feedback">
                            Ce champs est important
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div class="invalid-feedback">
                            Veuillez entrer une adresse mail valide.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="firstName">Mot de passe</label>
                        <input type="password" class="form-control" id="firstName" name="psw" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un mot de passe valide
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="firstName">Confirmez votre mot de passe</label>
                        <input type="password" class="form-control" id="lastName" name="psw-repeat" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un mot de passe valide
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="tel" class="form-label">Téléphone <span class="text-muted"></span></label>
                        <input type="tel" class="form-control" id="tel" name="phone">
                        <div class="invalid-feedback">
                            Veuillez entrer votre numéro de téléphone.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="age" class="form-label">Age<span class="text-muted"></span></label>
                        <input type="age" class="form-control" id="age" name="age">
                        <div class="invalid-feedback">
                            Veuillez entrer votre âge
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="address" name="address_1">
                        <div class="invalid-feedback">
                            Veuillez entrer votre adresse
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="country" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="ville" name="address_2">
                        <div class="invalid-feedback">
                            Veuillez choisir une Ville
                        </div>
                    </div>
<!--                    <div class="col-md-4">-->
<!--                        <label for="state" class="form-label">Pays</label>-->
<!--                        <input type="text" class="form-control" id="country" name="country">-->
<!--                        <div class="invalid-feedback">-->
<!--                            Veuillez choisir un Pays-->
<!--                        </div>-->
<!--                    </div>-->
                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="reg_user">S'enregistrer</button>
            </form>

            <div class="container_signin">
                <p>Déjà inscrit ? <a href="login.php">Connexion</a></p>
            </div>
        </div>
    </main>
</div>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<script src="form-validation.js"></script>


</body>

</html>