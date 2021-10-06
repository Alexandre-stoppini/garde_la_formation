<?php include('../modele/server.php') ?>
<?php
include_once "../Vue/header.php";
?>

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Indiquez votre besoin</h2>
        </div>
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" novalidate="" method="post" action="page_choix.php">
                <div class="row g-3">

                    <div class="col-12">
                        <label for="firstName">Je suis :</label>
                        <select id="role" class="form-select" name="role">
                            <option value="benevole">un(e) bénévole</option>
                            <option value="pro">un(e) professionnel(le) de la santé (justificatifs demandés)</option>
                            <option value="demandeur">à la recherche d'un coup de pouce pour mes études</option>
                        </select>
                    </div>

                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="spe_user">S'enregistrer</button>
            </form>


        </div>
    </main>
</div>
<?php
include_once "../Vue/footer.php";
?>
