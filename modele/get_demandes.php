<?php
function get_demande()
{
    $db = mysqli_connect('localhost', 'root', '', 'garde_la_formation');
    $demandes = mysqli_query($db, "SELECT demande.motif, demande.description, demande.lieu, users.prenom, users.phone FROM demande INNER JOIN users ON users.id = demande.id_user");
    $ar_inter = [];
    $ar_result = [];
    while ($row = mysqli_fetch_array($demandes)) {
        $ar_inter[] = $row;
    }
    foreach ($ar_inter as $value) {


        for ($i = 0; $i<5; $i++){
            unset ($value[$i]);
        }
        $ar_result[] = $value;
    }
    return ($ar_result);
}