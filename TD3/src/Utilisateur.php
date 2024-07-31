<?php
require_once 'ConnexionBaseDeDonnees.php';
require_once 'Trajet.php';

class Utilisateur {

    private string $login;
    private string $nom;
    private string $prenom;

    public function __construct(string $login, string $nom, string $prenom)
    {
        $this->login = $login;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public static function construireDepuisTableau(array $utilisateurTableau) : Utilisateur {
        return new Utilisateur(
            $utilisateurTableau["login"],
            $utilisateurTableau["nom"],
            $utilisateurTableau["prenom"]
        );
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function __toString() : string {
        return "<p> Utilisateur {$this->prenom} {$this->nom} de login {$this->login} </p>";
    }

    /**
     * @return Utilisateur[]
     */
    public static function getUtilisateurs() : array {
        $pdoStatement = ConnexionBaseDeDonnees::getPdo()->query("SELECT * FROM utilisateur");

        $utilisateurs = [];
        foreach($pdoStatement as $utilisateurFormatTableau) {
            $utilisateurs[] = Utilisateur::construireDepuisTableau($utilisateurFormatTableau);
        }

        return $utilisateurs;
    }

    /**
     * @return Trajet[]
     */
    public static function getTrajets(string $login) : array {
        $pdoStatement = ConnexionBaseDeDonnees::getPdo()->prepare("SELECT * FROM passager JOIN trajet ON id = trajetId WHERE passagerId = :loginTag");
        $pdoStatement->setFetchMode(PDO::FETCH_ASSOC);

        $values = ["loginTag" => $login];
        $pdoStatement->execute($values);
        $trajets = [];
        foreach ($pdoStatement as $trajet) {
            $trajets[] = Trajet::construireDepuisTableau($trajet);
        }
        return $trajets;
    }
}