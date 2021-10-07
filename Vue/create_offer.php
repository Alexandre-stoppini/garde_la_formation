<?php
include_once "../Vue/header.php";
include "../modele/server.php"
?>
    <div class="container my-5 create-box">
        <h1 class="text-center text-light mb-5">Créer une offre</h1>
        <form method="post" action="create_offer.php">
            <div class="mb-3 create-inputs py-3">
                <input type="text" class="form-control" placeholder="Mobilite :" id="mobilite" name="mobilite" required>
            </div>
            <div class="mb-3 create-inputs py-3">
                <textarea class="form-control" id="description" name="description" rows="10">Description :</textarea>
            </div>
            <div class="text-center">
                <a href="./page_profil.php" class="btn px-5 mx-2 py-2 create-btn text-light">Annuler</a>
                <button type="submit" class="btn px-5 mx-2 py-2 create-btn text-dark" style="background:#B9FFFC;" name="post_offer">Valider</button>
            </div>
        </form>
    </div>
<?php
include_once "../Vue/footer.php";
?>