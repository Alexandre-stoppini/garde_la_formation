<?php
session_start();
include_once "../Vue/header.php";
include_once "../modele/functions.php";
$profil = get_profil();
?>
<div class="row d-flex justify-content-center text-light ">
    <div class="col-md-12">
        <img src="./src/img/banniere.jpg" alt="front">
        <img src="./src/img/Ellipse_9.png" id="profil-img" alt="img-profil">
    </div>
</div>
<div class="container">

    <div class="container px-4" style="width:70%; border: 1px solid #fff; border-radius: 20px;">

        <div class="row justify-content-center text-light ">
            <div class="my-2 mx-5 text-center detail-block">
                <h5 style="color: white;" style="color: white;">Biographie :</h5>
                <span style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada,
                    risus id ultricies lobortis, justo felis consequat nisi, non iaculis tellus quam vitae lectus. Mauris at vehicula erat,
                    eget ultricies nunc. Fusce efficitur sapien sit amet ipsum posuere dapibus. Praesent sit amet lectus aliquet, molestie sem id,
                    commodo est. Pellentesque convallis libero a semper pretium.</span>

            </div>
        </div>
        <div class="row my-2 d-flex justify-content-center text-light ">

            <div class="col-md-4 my-2 mx-5 text-center detail-block">
                <h6 style="color: white;" style="color: white;font-size: 0.8em;">Nom :</h6>
                <span style="color: white;"><?php echo $profil[0]['nom'] ?></span>
            </div>
        </div>
        <div class="row my-2 d-flex justify-content-center text-light ">
            <div class="col-md-4 my-2 mx-5 text-center detail-block">
                <h6 style="color: white;" style="color: white;">Prénom :</h6>
                <span style="color: white;"><?php echo $profil[0]['prenom'] ?></span>
            </div>
        </div>
        <div class="row my-2 d-flex justify-content-center text-light  ">
            <div class="col-md-4 my-2 mx-5 text-center detail-block">
                <h6 style="color: white;">Télephone :</h6>
                <span style="color: white;"><?php echo $profil[0]['phone'] ?></span>
            </div>
        </div>
        <div class="row my-2 d-flex justify-content-center text-light ">
            <div class="col-md-4 my-2 mx-5 text-center detail-block ">
                <h6 style="color: white;">Email :</h6>
                <span style="color: white;"><?php echo $profil[0]['mail'] ?></span>
            </div>
        </div>
        <div class="row my-2 d-flex justify-content-center text-light ">
            <div class="col-md-4 my-2 mx-5 text-center detail-block ">
                <h6 style="color: white;">Age :</h6>
                <span style="color: white;"><?php echo $profil[0]['age'] ?></span>
            </div>
        </div>
        <div class="row my-2 d-flex justify-content-center text-light ">
            <div class="col-md-4 my-2 mx-5 text-center detail-block ">
                <h6 style="color: white;">Qualité :</h6>
                <span style="color: white;"><?php echo $profil[0]['pro'] ?></span>
            </div>
        </div>
        <!--        <div class="row my-2 d-flex justify-content-center text-light ">-->
        <!--            <div class="col-md-4 my-2 mx-5 text-center detail-block">-->
        <!--                <h6 style="color: white;">Mot de passe :</h6>-->
        <!--                <span style="color: white;">**********</span>-->
        <!--            </div>-->
        <!--        </div>-->
        <div class="text-end mb-3 me-5">
            <a href="./create_demande.php" class="h5 nav-link" id="btn-profil">Créer une annonce</a>
        </div>


    </div>



</div>
<?php
include_once "../Vue/footer.php";
?>