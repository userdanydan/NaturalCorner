<?php
include_once("views/View.inc.php");

class ResultatsRechercheView extends View {
    /**
     * 
     * @var Integer $nbArticles Le nombre d'articles correspondant au mot-clé trouvés.
     */
	private $nbArticles;
	/**
	 * 
	 * @var Integer $nbPages Le nombre de page de résultats.
	 */
	private $nbPages;
	/**
	 * Affiche le contenu de la recherche en fonction du mot-clé.
	 *
	 * @see View::displayBody()
	 */
	protected function displayBody() {
	   include('views/templates/trouver.inc.php');
	}
	/**
	 * Modifie le nombre d'articles.
	 * @param int : le nombre d'articles.
	 */
	public function setNbArticles($nbA){
	    $this->nbArticles=$nbA;
	}
	/**
	 * Retourne le nombre d'articles.
	 * @return int : le nombre d'articles.
	 */
	public function getNbArticles(){
	    return $this->nbArticles;
	}
	/**
	 * Modifie le nombre de pages.
	 * @param int : le nombre de pages.
	 */
	public function setNbPages($nbP){
	    $this->$nbPages=$nbP;
	}
	/**
	 * Retourne le nombre de pages.
	 * @return int : le nombre de pages.
	 */
	public function getNbPages(){
	    return $this->nbPages;
	}
	/**
	 * Fixe les recherches pour la vue.
	 */
	public function setRecherche($che){
	    $this->recherche=$che;
	}
	/**
	 * Retourne les recherches pour la vue.
	 */
	public function getRecherche(){
	    return $this->recherche;
	}
	/**
	 * Affiche la page suivante.
	 */
	public function pageSuivante(){
	    
	}
	/**
	 * Affiche la page précédente.
	 */
	public function pagePrecedente(){
	    
	}
	/**
	 * Classe par dénomination le résultat de la recherche.
	 */
	public function classerParDenomination(){
	    
	}
	/**
	 * Classe par prix unitaire le résultat de la recherche.
	 */
	public function classerParPrixUnitaire(){
	    
	}
	/**
	 * Classe par catégorie le résultat de la recherche.
	 */
	public function classerParCategorie(){
	    
	}
	/**
	 * Affiche les détails de l'article.
	 */
	public function afficherDetailsArticle(){
	    
	}
	/**
	 * Envoyer l'article vers le panier.
	 */
	public function mettreDansPanier(){
	    
	}
}
?>