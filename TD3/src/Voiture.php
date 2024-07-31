<?php
require_once "ConnexionBaseDeDonnees.php";

class Voiture {
    private string $immatriculation;
    private string $marque;
    private string $couleur;
    private int $nbSieges; // Nombre de places assises

    // un getter
    public function getMarque() : string {
        return $this->marque;
    }

    // un setter
    public function setMarque(string $marque) : void {
        $this->marque = $marque;
    }

    public function getImmatriculation() : string {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation) : void {
        $this->immatriculation = substr($immatriculation, 0, 8);
    }

    public function getCouleur() : string {
        return $this->couleur;
    }

    public function setCouleur(string $couleur) : void {
        $this->couleur = $couleur;
    }

    public function getNbSieges() : int {
        return $this->nbSieges;
    }

    public function setNbSieges(int $nbSieges) : void {
        $this->nbSieges = $nbSieges;
    }

    // un constructeur
    public function __construct(
        string $immatriculation,
        string $marque,
        string $couleur,
        int $nbSieges
    ) {
        $this->immatriculation = substr($immatriculation, 0, 8);
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->nbSieges = $nbSieges;
    }

    public static function construireDepuisTableau(array $voitureFormatTableau) : Voiture {
        return new Voiture($voitureFormatTableau['immatriculation'], $voitureFormatTableau['marque'], $voitureFormatTableau['couleur'], $voitureFormatTableau['nbSieges']);
    }

    public static function getVoitures() : array {
        $pdo = ConnexionBaseDeDonnees::getPdo();
        $pdoStatement = $pdo->query("SELECT * FROM voiture");
        $pdoStatement->setFetchMode(PDO::FETCH_ASSOC);

        $voitures = [];
        foreach ($pdoStatement as $voitureFormatTableau)
            $voitures[] = new Voiture($voitureFormatTableau['immatriculation'], $voitureFormatTableau['marque'], $voitureFormatTableau['couleur'], $voitureFormatTableau['nbSieges']);

        return $voitures;
    }

    public static function getVoitureParImmatriculation(string $immatriculation) : ?Voiture {
        $sql = "SELECT * from voiture WHERE immatriculation = :immatriculationTag";
        // Préparation de la requête
        $pdoStatement = ConnexionBaseDeDonnees::getPdo()->prepare($sql);

        $values = array(
            "immatriculationTag" => $immatriculation
        );
        // On donne les valeurs et on exécute la requête
        $pdoStatement->execute($values);

        // On récupère les résultats comme précédemment
        // Note: fetch() renvoie false si pas de voiture correspondante
        $voitureFormatTableau = $pdoStatement->fetch();

        return $voitureFormatTableau ? Voiture::construireDepuisTableau($voitureFormatTableau) : null;
    }

    // Pour pouvoir convertir un objet en chaîne de caractères
    public function __toString() : string {
        return "Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur, $this->nbSieges sieges)";
    }
}
