<?php
require_once "ConfigurationBaseDeDonnees.php";

class ConnexionBaseDeDonnees {
    private static ?ConnexionBaseDeDonnees $instance = null;

    private PDO $pdo;

    public function __construct() {
        $config = ConfigurationBaseDeDonnees::class;
        $this->pdo = new PDO("mysql:host={$config::getNomHote()};port={$config::getPort()};dbname={$config::getNomBaseDeDonnees()}", $config::getLogin(), $config::getPassword());
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