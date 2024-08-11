<?php
require_once ('../Modele/ModeleVoiture.php'); // chargement du modèle

class ControleurVoiture {
    // Déclaration de type de retour void : la fonction ne retourne pas de valeur
    public static function afficherListe() : void {
        $voitures = ModeleVoiture::getVoitures(); //appel au modèle pour gérer la BD
        require ('../vue/voiture/liste.php');  //"redirige" vers la vue
    }

    public static function afficherDetail() : void {
        $voiture = ModeleVoiture::getVoitureParImmatriculation($_GET['immatriculation']);
        if(!is_null($voiture))
            require ('../vue/voiture/detail.php');
        else require ('../vue/voiture/erreur.php');
    }
}
?>