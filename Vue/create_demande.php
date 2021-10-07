<?php
include_once "../Vue/header.php";
include "../modele/server.php"
?>
<div class="container my-5 create-box">
    <h1 class="text-center text-light mb-5">Créer une annonce</h1>
    <form method="post" action="page_Ajoute.php">
        <div class="mb-3 create-inputs py-3">
            <select name="motif" id="motif" class="form-select">
                <option value="" style="display: none;">Motif :</option>
                <option class="text-dark" value="non-urgent">Envie de sortir de la solitude</option>
                <option class="text-dark" value="urgent">Besoin de parler avec un pro</option>
            </select>
        </div>
        <div class="mb-3 create-inputs py-3">
            <input type="text" class="form-control" placeholder="Lieu :" id="lieu" name="lieu">
        </div>
        <div class="mb-3 create-inputs py-3">
            <textarea class="form-control" id="description" name="description" placeholder="Lieu :" rows="10"></textarea>
        </div>
        <div class="text-center">
            <a href="./page_profil.php" class="btn px-5 mx-2 py-2 create-btn text-light">Annuler</a>
            <button type="submit" class="btn px-5 mx-2 py-2 create-btn text-dark" style="background:#B9FFFC;" name="post_demande">Valider</button>
        </div>
    </form>
</div>
<?php
include_once "../Vue/footer.php";
?>