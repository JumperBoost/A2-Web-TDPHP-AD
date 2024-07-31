<?php
require_once "Trajet.php";

$trajetId = $_POST['trajetId'];
$login = $_POST['login'];

if(empty($trajetId) || empty($login))
    echo "<h2>Impossible de supprimer un passager d'un trajet : un ou plusieurs arguments sont absents ou erronés.</h2>";
else {
    // Supprimer le passager du trajet si existant
    Trajet::supprimerPassager($trajetId, $login);
    echo "<h2>Le passager (login $login) a été supprimé du trajet id $trajetId.</h2>";
}