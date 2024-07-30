<?php
    // On inclut les fichiers de classe PHP pour pouvoir se servir de la classe ConfigurationBaseDeDonnees.
    // require_once évite que ConfigurationBaseDeDonnees.php soit inclus plusieurs fois,
    // et donc que la classe ConfigurationBaseDeDonnees soit déclaré plus d'une fois.
    require_once 'ConfigurationBaseDeDonnees.php';

    // On affiche le login de la base de donnees
    echo ConfigurationBaseDeDonnees::getLogin();
    echo "<br>";
    echo ConfigurationBaseDeDonnees::getNomHote();
    echo "<br>";
    echo ConfigurationBaseDeDonnees::getPort();
    echo "<br>";
    echo ConfigurationBaseDeDonnees::getNomBaseDeDonnees();
    echo "<br>";
    echo ConfigurationBaseDeDonnees::getPassword();