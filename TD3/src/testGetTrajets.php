<?php
require_once "Utilisateur.php";

$id = $_GET['id'];

if(empty($id))
    echo "<h2>Impossible de récupérer les trajets du passager : l'identifiant est absent ou est erroné.</h2>";
else {
    // Afficher les trajets du passager demandé
    echo "<h2>Trajets du passager id $id</h2><ul>";
    $trajets = Utilisateur::getTrajets($id);
    foreach ($trajets as $trajet) {
        echo "<li>$trajet</li>";
    }
    echo "</ul>";
}