<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Formulaire Trajets</title>
</head>

<body>
    <form method="get" action="testGetTrajets.php">
        <fieldset>
            <legend>Visualiser les trajets d'un passager</legend>
            <p>
                <label for="passager_id">Identifiant du passager</label> :
                <input type="text" placeholder="u1" name="id" id="passager_id" required/>
            </p>

            <p>
                <input type="submit" value="Envoyer" />
            </p>
        </fieldset>
    </form>
</body>
</html>