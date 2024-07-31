<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Formulaire Suppression Passager</title>
</head>

<body>
<form method="post" action="testSupprimerPassager.php">
    <fieldset>
        <legend>Supprimer un passager d'un trajet</legend>
        <p>
            <label for="trajet_id">Identifiant du trajet</label> :
            <input type="number" placeholder="1" name="trajetId" id="trajet_id" required/>
        </p>

        <p>
            <label for="passager_id">Identifiant du passager</label> :
            <input type="text" placeholder="u1" name="login" id="passager_id" required/>
        </p>

        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>
</body>
</html>