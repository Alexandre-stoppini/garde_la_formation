<?php
include_once "../Vue/header.php";
include "../modele/server.php"
?>
<div class="container my-5">
    <h1 class="text-center">Ajouter une demande</h1>
    <form method="post" action="page_Ajoute.php">
        <div class="mb-3">
            <label for="motif" class="form-label">Motif : </label>
            <select name="motif" id="motif" class="form-select">
                <option value="non-urgent">Envie de sortir de la solitude</option>
                <option value="urgent">Besoin de parler avec un pro</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu : </label>
            <input type="text" class="form-control" id="lieu" name="lieu">
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success" name="post_demande">Ajouter</button>
    </form>
</div>
<?php
include_once "../Vue/footer.php";
?>