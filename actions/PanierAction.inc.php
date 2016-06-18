<?php
include_once  __DIR__.'/../actions/Action.inc.php';
include_once  __DIR__.'/../model/Panier.class.php';
include_once  __DIR__.'/../model/LignePanier.class.php';

class PanierAction extends Action
{
    private $articlesChoisis;
    //private $panier;
    public static $idLigne;
	/**
	 * @see Action::run()
	 */
	public function run()
	{
		//$this->panier = new Panier();
		if($this->getPanier()===NULL){
		  $this->setPanier(new Panier());
		}else{
    		if(isset($_POST['articles'])){
                $this->ajouterLigne(++self::$idLigne);
                $this->setView(getViewByName("Panier"));
                $this->getView()->setPanier($this->getPanier());
    		}else{
    		    $this->setView(getViewByName("Panier"));
    		    $this->getView()->setMessage("Aucun élément ajouté au panier.");
    		}
		}
        
	}
	/**
	 * Modifie une ligne en réaction à l'action de l'utilisateur. 
	 * @param $id int : le numéro de la ligne.
	 */
	public function modifierQuantiteLigne($id){
	    $this->getPanier()->recalculer($id, $quantite);
	}
	/**
	 * Ajoute une ligne en réaction à l'action de l'utilisateur.
	 * @param $id int : le numéro de la ligne.
	 */
	public function ajouterLigne($id){
	    foreach($_POST["articles"] as $key=>$value){
	        $this->getPanier()->ajouterLigne(
	                new LignePanier(
	                        $this->database->getArticle($_POST["articles"][$key]) , 
	                        $_POST["nbArticles"][$key]));
	    }
	    
	}
	/**
	 * Supprime une ligne en réaction à l'action de l'utilisateur.
	 * @param $id int : le numéro de la ligne.
	 */
	public function supprimerLigne($id){
	     $this->getPanier()->retirerLigne($id);
	}

}
?>