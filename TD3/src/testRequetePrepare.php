<?php
require_once "Voiture.php";

$voiture = Voiture::getVoitureParImmatriculation("BC397WW");
if(is_null($voiture))
    echo "<p>Voiture inexistante.</p>";
else echo "<p>$voiture</p>";

$nouvelle_voiture = new Voiture("FZ798AQ", "Citroën", "Rouge", 5);
echo "<p>$nouvelle_voiture</p>";