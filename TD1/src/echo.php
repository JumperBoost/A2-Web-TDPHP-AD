<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Mon premier php</title>
    </head>

    <body>
        <p>Voici le résultat du script PHP :</p>
        <?php
            // Ceci est un commentaire PHP sur une ligne
            /* Ceci est le 2ème type de commentaire PHP
            sur plusieurs lignes */

            // On met la chaine de caractères "hello" dans la variable 'texte'
            // Les noms de variable commencent par $ en PHP
            $texte = "hello world !";

            // On écrit le contenu de la variable 'texte' dans la page Web
            echo $texte;


            echo "<br>";
            $prenom = "Marc";
            echo "Bonjour\n " . $prenom . "<br>";
            echo "Bonjour\n $prenom <br>";
            echo 'Bonjour\n $prenom <br>';

            echo $prenom . "<br>";
            echo "$prenom";


            $utilisateur = [
                'prenom' => 'Juste',
                'nom'    => 'Leblanc'
            ];
            $utilisateur['passion'] = 'maquettes en allumettes';
            $utilisateur[] = "Nouvelle valeur";
            echo "<br>";
            // Syntaxe avec {$...}
            echo "Je m'appelle {$utilisateur['nom']}<br>";
            echo "Je m'appelle {$utilisateur["nom"]}<br>";
            // Syntaxe simplifiée
            // Attention, pas de guillemets autour de la clé "nom"
            echo "Je m'appelle $utilisateur[nom]";
            foreach ($utilisateur as $cle => $valeur){
                echo "<br>$cle : $valeur\n";
            }


            $marque = "Renault";
            $couleur = "Noir";
            $immatriculation = "GG-254-WP";
            $nbSieges = 5;
            echo "<p>Voiture $immatriculation de marque $marque (couleur $couleur, $nbSieges sieges)</p>";

            $voiture = [
                'marque' => 'Audi',
                'couleur' => 'Orange',
                'immatriculation' => "BC-397-WW",
                'nbSieges' => 2
            ];
            var_dump($voiture);
            echo "<p>Voiture $voiture[immatriculation] de marque $voiture[marque] (couleur $voiture[couleur], $voiture[nbSieges] sieges)</p>";

            $voitures = [
                0 => ['marque' => $marque, 'couleur' => $couleur, 'immatriculation' => $immatriculation, 'nbSieges' => $nbSieges],
                1 => $voiture,
            ];
            $voitures[] = ['marque' => 'Peugeot', 'couleur' => 'Bleu', 'immatriculation' => 'CD-123-BT', 'nbSieges' => 5];
            var_dump($voitures);

            echo "<h1>Liste des voitures</h1>";
            $liste = "<ul>";
            foreach ($voitures as $key => $value) {
                $liste .= "<li>Voiture $value[immatriculation] de marque $value[marque] (couleur $value[couleur], $value[nbSieges] sieges)</li>";
            }
            if(empty($voitures))
                echo "<p>Il n'y a aucune voiture.</p>";
            else
                echo "$liste</ul>";
        ?>
    </body>
</html>