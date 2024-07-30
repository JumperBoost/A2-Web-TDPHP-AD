<?php
require_once "Voiture.php";

$immatriculation = $_POST['immatriculation'];
$marque = $_POST['marque'];
$couleur = $_POST['couleur'];
$nbSieges = intval($_POST['nbSieges']);

if($immatriculation != null && $marque != null && $couleur != null && $nbSieges != null) {
    $voiture = new Voiture($immatriculation, $marque, $couleur, $nbSieges);
    echo "<h2>Voiture créée avec succès</h2>";
    echo $voiture;
} else {
    echo "<h2>Impossible de créer une voiture : un ou plusieurs arguments sont absents ou erronés.</h2>";
}