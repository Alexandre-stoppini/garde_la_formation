<?php include('../modele/server.php') ?>
<?php
include_once "../Vue/header.php";
?>

<div class="container">
    <main>
        <div class="py-3 text-center">
            <h2 style="color: white;">Indiquez votre besoin</h2>
        </div>
        <div class="row my-2 d-flex justify-content-center text-light">
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" novalidate="" method="post" action="page_choix.php">
                <div class="row g-3">

                    <div class="col-12">
                        <label for="firstName" style="font-size: 1.5rem;">Je suis :</label>
                        <select id="role" class="form-select" name="role" onchange="fHidden()">
                            <option value="benevole">un(e) bénévole</option>
                            <option value="pro">un(e) professionnel(le) de la santé (justificatifs demandés)</option>
                            <option value="demandeur">à la recherche d'un coup de pouce pour mes études</option>
                        </select>
                    </div>

                    <div id = "select_disease" hidden class="col-12">
                        <label>Je suis atteint de :</label>
                        <select id="disease" class="form-semect" name="disease">
                            <option value="schizophrénie">Schizophrénie</option>
                            <option value="troubles_bipolaires">Troubles bipolaires</option>
                            <option value="dépression_severe">Dépression sévère</option>
                            <option value="dépression">Dépression</option>
                            <option value="non_communiqué">Ne souhaite pas répondre</option>
                        </select>
                    </div>

                    <div class="row my-2 d-flex justify-content-center text-light">
                    <div class="col col-lg-6">
                    <button class="w-100 btn btn-primary btn-lg" style=" display: inline-block;background-color: #9AB3F5;border-radius: 10px; color: white;" type="submit" name="spe_user">Valider</button>
                    <div>
                        <div>
            </form>


        </div>
    </main>
</div>
<script>
    function fHidden(){
        var x = document.getElementById("role").value;
        if (x === "demandeur"){
            document.getElementById("select_disease").removeAttribute("hidden");
        } else {
            document.getElementById("select_disease").setAttribute("hidden", true   );
        }
    }
</script>
<?php
include_once "../Vue/footer.php";
?>
