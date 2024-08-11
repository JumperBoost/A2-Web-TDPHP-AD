<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Création d'une voiture</title>
</head>

<body>
<form method="get">
    <fieldset>
        <legend>Formulaire de création :</legend>
        <p>
            <label for="immatriculation_id">Immatriculation</label> :
            <input type="text" placeholder="256AB34" name="immatriculation" id="immatriculation_id" required/>
        </p>

        <p>
            <label for="marque_id">Marque</label> :
            <input type="text" placeholder="Renault" name="marque" id="marque_id" required/>
        </p>

        <p>
            <label for="couleur_id">Couleur</label> :
            <input type="text" placeholder="Rouge" name="couleur" id="couleur_id" required/>
        </p>

        <p>
            <label for="nbSieges_id">Nombre de sièges</label> :
            <input type="number" placeholder="5" name="nbSieges" id="nbSieges_id" required/>
        </p>

        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
    <input type='hidden' name='action' value='creerDepuisFormulaire'>
</form>
</body>
</html>