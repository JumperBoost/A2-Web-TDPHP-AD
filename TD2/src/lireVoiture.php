<?php
require_once "ConnexionBaseDeDonnees.php";
require_once "../../TD1/src/Voiture.php";

$pdo = ConnexionBaseDeDonnees::getPdo();
$pdoStatement = $pdo->query("SELECT * FROM voiture");

// Lire et afficher une voiture
$voitureFormatTableau = $pdoStatement->fetch();
var_dump($voitureFormatTableau);
$voiture = new Voiture($voitureFormatTableau['immatriculationBaseDeDonnees'], $voitureFormatTableau['marqueBaseDeDonnees'], $voitureFormatTableau['couleurBaseDeDonnees'], $voitureFormatTableau['nbSiegesBaseDeDonnees']);
echo $voiture;

// Lire et afficher toutes les autres voitures
foreach ($pdoStatement as $voitureFormatTableau2) {
    $voiture2 = new Voiture($voitureFormatTableau2['immatriculationBaseDeDonnees'], $voitureFormatTableau2['marqueBaseDeDonnees'], $voitureFormatTableau2['couleurBaseDeDonnees'], $voitureFormatTableau2['nbSiegesBaseDeDonnees']);
    echo "<p>$voiture2</p>";
}