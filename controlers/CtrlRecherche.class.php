<?php
include_once(__DIR__.'/../actions/Action.inc.php');
/**
 * Contrôleur de la recherche.
 * @author Daniel
 */
trait CtrlRecherche{
    /**
     * Contrôleur se chargeant de demander à la base de données des articles
     * correspondant aux critères de recherche.
     * @param String $chaine
     * @return Array Article : les articles recherchés.
     */
    public function chercherArticle($chaine){
        $prix = (int)$chaine;
        return $this->database->chercherParPrix($prix);
    }
}