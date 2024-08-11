<?php
require_once ('../Modele/ModeleVoiture.php'); // chargement du modèle

class ControleurVoiture {
    // Déclaration de type de retour void : la fonction ne retourne pas de valeur
    public static function afficherListe() : void {
        $voitures = ModeleVoiture::getVoitures(); //appel au modèle pour gérer la BD
        self::afficherVue("voiture/liste.php", ['voitures' => $voitures]);  //"redirige" vers la vue
    }

    public static function afficherDetail() : void {
        $voiture = ModeleVoiture::getVoitureParImmatriculation($_GET['immatriculation']);
        if(!is_null($voiture))
            self::afficherVue("voiture/detail.php", ['voiture' => $voiture]);
        else self::afficherVue("voiture/erreur.php");
    }

    public static function afficherFormulaireCreation() : void {
        self::afficherVue("voiture/formulaireCreation.php");
    }

    public static function creerDepuisFormulaire() : void {
        $voiture = ModeleVoiture::construireDepuisTableau([
            'immatriculation' => $_GET['immatriculation'],
            'marque' => $_GET['marque'],
            'couleur' => $_GET['couleur'],
            'nbSieges' => $_GET['nbSieges']
        ]);

        if($voiture->ajouter())
            self::afficherListe();
        else
            self::afficherVue("voiture/erreur.php");
    }

    private static function afficherVue(string $cheminVue, array $parametres = []) : void {
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require "../vue/$cheminVue"; // Charge la vue
    }
}
?>