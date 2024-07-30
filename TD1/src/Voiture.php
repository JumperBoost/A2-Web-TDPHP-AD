<?php
class Voiture {
    private $immatriculation;
    private $marque;
    private $couleur;
    private $nbSieges; // Nombre de places assises

    // un getter
    public function getMarque() {
        return $this->marque;
    }

    // un setter
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getImmatriculation() {
        return $this->immatriculation;
    }

    public function setImmatriculation($immatriculation) {
        $this->immatriculation = substr($immatriculation, 0, 8);
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getNbSieges() {
        return $this->nbSieges;
    }

    public function setNbSieges($nbSieges) {
        $this->nbSieges = $nbSieges;
    }

    // un constructeur
    public function __construct(
        $immatriculation,
        $marque,
        $couleur,
        $nbSieges
    ) {
        $this->immatriculation = substr($immatriculation, 8);
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->nbSieges = $nbSieges;
    }

    // Pour pouvoir convertir un objet en chaîne de caractères
    public function __toString() {
        return "Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur, $this->nbSieges sieges)";
    }
}
