<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
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

</body>

</html>