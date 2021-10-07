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
include '../modele/get_demandes.php';
$demandes = get_demande();
?>

    <div class="container-fluid p-0">
        <div id="image1">
        </div>
    </div>
    <div class="container-fluid p-0">
        <div id="image2"></div>
    </div>
    <div class="container-fluid py-5 px-0" id="image3">

        <div class="row justify-content-center">
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
include_once "footer.php";
?>