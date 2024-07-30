<?php
require_once "Voiture.php";

// Lire et afficher toutes les voitures
$voitures = Voiture::getVoitures();
foreach ($voitures as $voiture) {
    echo "<p>$voiture</p>";
}