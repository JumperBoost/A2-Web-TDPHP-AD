<?php
require_once "Utilisateur.php";
require_once "Trajet.php";

// Lister les utilisateurs
$utilisateurs = Utilisateur::getUtilisateurs();
echo "<h2>Utilisateurs</h2><ul>";
foreach ($utilisateurs as $utilisateur) {
    echo "<li>$utilisateur</li>";
}
echo "</ul>";

// Lister les trajets
$trajets = Trajet::getTrajets();
echo "<h2>Trajets</h2><ul>";
foreach ($trajets as $trajet) {
    echo "<li>$trajet</li>";
}
echo "</ul>";