<?php

function post_demande($db) {
    $motif = mysqli_real_escape_string($db, $_POST['motif']);
    $lieu = mysqli_real_escape_string($db, $_POST['lieu']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    $query = "INSERT INTO demande (id_user, motif, lieu, description) VALUES (".$_SESSION['id'].", '$motif', '$lieu', '$description')";




}

