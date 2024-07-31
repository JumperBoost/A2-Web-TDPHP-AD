<?php
require_once "Voiture.php";

$voiture = Voiture::getVoitureParImmatriculation("BC397WW");
if(is_null($voiture))
    echo "Voiture inexistante.";
else echo $voiture;