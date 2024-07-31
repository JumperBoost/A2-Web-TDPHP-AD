<?php
require_once "ConfigurationBaseDeDonnees.php";

class ConnexionBaseDeDonnees {
    private static ?ConnexionBaseDeDonnees $instance = null;

    private PDO $pdo;

    public function __construct() {
        $config = ConfigurationBaseDeDonnees::class;
        // Connexion à la base de données
        // Le dernier argument sert à ce que toutes les chaines de caractères en entrée et sortie de MySQL soit dans le codage UTF-8
        $this->pdo = new PDO("mysql:host={$config::getNomHote()};port={$config::getPort()};dbname={$config::getNomBaseDeDonnees()}", $config::getLogin(), $config::getPassword(),
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        // On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getPdo(): PDO {
        return ConnexionBaseDeDonnees::getInstance()->pdo;
    }

    // getInstance s'assure que le constructeur ne sera
    // appelé qu'une seule fois.
    // L'unique instance crée est stockée dans l'attribut $instance
    private static function getInstance() : ConnexionBaseDeDonnees {
        // L'attribut statique $pdo s'obtient avec la syntaxe ConnexionBaseDeDonnees::$pdo
        // au lieu de $this->pdo pour un attribut non statique
        if (is_null(ConnexionBaseDeDonnees::$instance))
            // Appel du constructeur
            ConnexionBaseDeDonnees::$instance = new ConnexionBaseDeDonnees();
        return ConnexionBaseDeDonnees::$instance;
    }
}