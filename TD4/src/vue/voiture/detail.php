<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail voiture</title>
</head>
<body>
<?php
/** @var ModeleVoiture $voiture */
echo "Voiture {$voiture->getMarque()} de marque {$voiture->getMarque()} (couleur {$voiture->getCouleur()}, {$voiture->getNbSieges()} sieges)"
?>
</body>
</html>