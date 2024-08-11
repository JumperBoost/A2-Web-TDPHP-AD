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
            echo '<p> Voiture d\'immatriculation <a href="?action=afficherDetail&immatriculation=' . $voiture->getImmatriculation() . '">' . $voiture->getImmatriculation() . '</a>.</p>';
        echo '<i><a href="?action=afficherFormulaireCreation">Créer une voiture</a></i>';
        ?>
    </body>
</html>