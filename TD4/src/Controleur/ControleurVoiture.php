<?php
require_once ('../Modele/ModeleVoiture.php'); // chargement du modèle
$voitures = ModeleVoiture::getVoitures();     //appel au modèle pour gérer la BD
require ('../vue/voiture/liste.php');  //redirige vers la vue
?>