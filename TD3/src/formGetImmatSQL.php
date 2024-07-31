<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form method="get" action="formGetImmatSQL.php">
                <fieldset>
                    <legend>Trouve une voiture par son immatriculation :</legend>
                    <p>
                        <label for="immat_id">Immatriculation</label> :
                        <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
                    </p>
                    <p>
                        <input type="submit" value="Envoyer" />
                    </p>
                </fieldset>
            </form>
        </div>
        <?php

        require_once 'ConnexionBaseDeDonnees.php';
        require_once 'Voiture.php';

        function getVoitureParImmatriculation(string $immat) : ?Voiture {
            $sql = "SELECT * FROM voiture2 WHERE immatriculation='$immat'";
            echo "<p>J'effectue la requête <pre>\"$sql\"</pre></p>";
            $pdoStatement = ConnexionBaseDeDonnees::getPDO()->query($sql);
            $voitureTableau = $pdoStatement->fetch();

            if ($voitureTableau !== false) {
                return Voiture::construireDepuisTableau($voitureTableau);
            }
            return null;
        }

        if (isset($_GET['immatriculation'])) {
            $v = getVoitureParImmatriculation($_GET['immatriculation']);
            echo $v;
        }
        ?>
    </body>
</html>
