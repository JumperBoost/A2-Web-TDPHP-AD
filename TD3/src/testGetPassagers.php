<?php
require_once "Trajet.php";

$id = intval($_GET['id']);

if($id <= 0)
    echo "<h2>Impossible de récupérer les passagers du trajet : l'identifiant est absent ou est erroné.</h2>";
else {
    // Afficher les passagers du trajet demandé
    echo "<h2>Passagers du trajet id $id</h2><ul>";
    $passagers = Trajet::getPassagers($id);
    foreach ($passagers as $passager) {
        echo "<li>$passager</li>";
    }
    echo "</ul>";
}