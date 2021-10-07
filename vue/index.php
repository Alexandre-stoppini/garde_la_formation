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
$demandes = get_demande();
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
>>>>>>> on_repart_de_là
        </div>
    </div>
                    </div>
                </div>





    </div>
include_once "footer.php";
?>