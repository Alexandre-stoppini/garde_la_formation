<?php
include_once "../Vue/header.php";
?>
<div class="container my-5">
    <h1 class="text-center">Ajouter une demande</h1>
    <form>
        <div class="mb-3">
            <label for="motif" class="form-label">Motif : </label>
            <select name="motif" id="motif" class="form-select">
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu : </label>
            <input type="text" class="form-control" id="lieu">
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
<?php
include_once "../Vue/footer.php";
?>