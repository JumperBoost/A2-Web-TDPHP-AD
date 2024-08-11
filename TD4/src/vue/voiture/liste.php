<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        /** @var array $voitures */
        foreach ($voitures as $voiture)
            echo '<p> Voiture d\'immatriculation ' . $voiture->getImmatriculation() . '.</p>';
        ?>
    </body>
</html>