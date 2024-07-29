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
        ?>
    </body>
</html>