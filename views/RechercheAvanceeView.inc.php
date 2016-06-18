<?php
include_once("views/View.inc.php");

class RechercheAvanceeView extends View {
    /**
     * @var $denomination String : la dénomination de l'article à rechercher.
     */
    private $denomination;
    /**
     * @var $categorie String : la catégorie de l'article à rechercher.
     */
    private $categorie;
    /**
     * @var $prix String : le prix de l'article à rechercher.
     */
    private $prix;
	/**
	 * Affiche la page de recherche avancée.
	 * @see View::displayBody()
	 */
	public function displayBody() {
		include("views/templates/recherche_avancee.inc.php");
	}
    /**
     * Recherche dans la base de données un article correspondant à la chaîne de caractère.
     * @param String $chaine :  la chaîne de caractère de recherche.
     */
	public function chercher($chaine){
	    return $this->verifierSyntaxe($chaine);    
	}
	/**
	 * Vérifier la validité de la chaîne de caractètre introduite.
	 * @param String $chaine : la chaîne de caractère de recherche.
	 */
	private function verifierSyntaxe($chaine){
	    if(strlen($chaine)===0){
	        return false;
	    }else{
	        return $chaine;
	    }
	}
}
?>

