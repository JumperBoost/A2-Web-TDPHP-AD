<?php
require_once "Voiture.php";

$immatriculation = $_POST['immatriculation'];
$marque = $_POST['marque'];
$couleur = $_POST['couleur'];
$nbSieges = intval($_POST['nbSieges']);

if($immatriculation != null && $marque != null && $couleur != null && $nbSieges != null) {
    $voiture = new Voiture($immatriculation, $marque, $couleur, $nbSieges);
    echo $voiture;
    if($voiture->ajouter())
        echo "<h2>Voiture créée avec succès</h2>";
    else echo "<h2>Une erreur est survenue lors de la création de la Voiture. Veuillez vérifier les informations.";
} else {
    echo "<h2>Impossible de créer une voiture : un ou plusieurs arguments sont absents ou erronés.</h2>";
}