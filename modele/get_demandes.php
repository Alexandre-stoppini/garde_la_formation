<?php
function get_demande()
{
    $db = mysqli_connect('localhost', 'root', '', 'garde_la_formation');
    $demandes = mysqli_query($db, "SELECT demande.motif, demande.description, demande.lieu, users.prenom, users.phone, users.disease FROM demande INNER JOIN users ON users.id = demande.id_user");
    $ar_inter = [];
    $ar_result = [];
    while ($row = mysqli_fetch_array($demandes)) {
        $ar_inter[] = $row;
    }
    foreach ($ar_inter as $value) {


        for ($i = 0; $i < 5; $i++) {
            unset ($value[$i]);
        }
        $ar_result[] = $value;
    }
    return ($ar_result);
}

function get_offres(){
    $db = mysqli_connect('localhost', 'root', '', 'garde_la_formation');
    $offres = mysqli_query($db, "SELECT offre.mobilite, offre.description, users.prenom, users.phone, users.pro FROM offre INNER JOIN users ON users.id = offre.id_user");
    $ar_inter = [];
    $ar_result = [];
    while ($row = mysqli_fetch_array($offres)) {
        $ar_inter[] = $row;
    }
    foreach ($ar_inter as $value) {


        for ($i = 0; $i < 5; $i++) {
            unset ($value[$i]);
        }

        $value["pro"] = $value["pro"] == "1" ? "Professionnel de la santé" : "Bénévole sans diplôme";

        $ar_result[] = $value;
    }
    return ($ar_result);
}