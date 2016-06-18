<?php
include_once("views/View.inc.php");

class ChercherView extends View{
	private $recherche;
	private $nbArticles;
	private $nbPages;
	/**
	 * Affiche le contenu de la recherche en fonction de la présence d'un mot-clé.
	 *
	 * @see View::displayBody()
	 */
	protected function displayBody() {
	    if(!isset($_POST['article'])){
		  include('views/templates/chercher.inc.php');	  
	    }else{
	      include('views/templates/trouver.inc.php');
	    }     
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
}
?>