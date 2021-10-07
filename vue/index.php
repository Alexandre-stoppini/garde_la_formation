<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['prenom']);
    header("location: login.php");
}
?>
<?php
include_once "header.php";
include '../modele/functions.php';
$demandes = get_demande();
$offres = get_offres();
?>

<<<<<<< HEAD
<div class="container-fluid p-0">
    <div id="image1"></div>

    <div id="image2" class="row ">
        <div class="col-md-3 ms-5">
            <select name="motif" class="py-3 form-select text-center option-filtre">
                <option value="" style="display: none;">Motif :</option>
                <option class="text-dark" value="non-urgent">Envie de sortir de la solitude</option>
                <option class="text-dark" value="urgent">Besoin de parler avec un pro</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="motif" class="py-3 form-select text-center option-filtre">
                <option value="" style="display: none;">Motif :</option>
                <option class="text-dark" value="non-urgent">Envie de sortir de la solitude</option>
                <option class="text-dark" value="urgent">Besoin de parler avec un pro</option>
            </select>
        </div>
        <div class="col-md-3">
            <input type="text" class="py-3 form-control text-center option-filtre" placeholder="Lieu :" id="lieu-filtre" name="lieu">
        </div>
        <div class="col-md-2">
            <a href="#"><img src="./src/img/recherche.png" alt="recherche" id="logo-recherche"></a>
=======
    <div class="container-fluid p-0">
        <div id="image1">
>>>>>>> on_repart_de_là
        </div>
    </div>
    <div class="container-fluid p-0">
        <div id="image2"></div>
    </div>
    <div class="container-fluid py-5 px-0" id="image3">
        <div class="row justify-content-center">

            <h2>OFFRES</h2>
            <?php
            foreach ($offres as $offre) {

                ?>
                <div class="col-md-5 py-5 mx-3 my-3 profil-card">
                    <div class="row">
                        <div class="col-md-2 profil-img mx-2"></div>
                        <div class="col-md-9">
                            <p><?php echo $offre['prenom'] ?></p>
                            <p><?php echo $offre['pro'] ?></p>
                            <p><?php echo $offre['phone'] ?></p>
                            <p><?php echo $offre['mobilite'] ?></p>
                            <p><?php echo $offre['description'] ?></p>
                        </div>
                    </div>

                </div>


            <?php } ?>


        </div>
    </div>
<?php if ($_SESSION["benevole"] == 1) { ?>
    <hr>
    <div class="container-fluid py-5 px-0" id="image3">
        <div class="row justify-content-center">

            <h2>DEMANDES</h2>
            <?php
            foreach ($demandes as $demande) {
                ?>
                <div class="col-md-5 py-5 mx-3 my-3 profil-card">
                    <div class="row">
                        <div class="col-md-2 profil-img mx-2"></div>
                        <div class="col-md-9">
                            <p><?php echo $demande['prenom'] ?></p>
                            <p><?php echo $demande['motif'] ?></p>
                            <p><?php echo $demande['phone'] ?></p>
                            <p><?php echo $demande['lieu'] ?></p>
                            <p><?php echo $demande['description'] ?></p>
                        </div>
                    </div>

                </div>


            <?php } ?>


        </div>
    </div>

    <?php
}
include_once "footer.php";
?>