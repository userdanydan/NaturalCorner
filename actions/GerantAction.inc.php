<?php
include_once("actions/Action.inc.php");
class GerantAction extends Action
{   
    /**
     * @var array Utilisateurs : tous les utilisateurs de la database.
     */
    private $_utilisateurs;
    /**
     * @var array Articles : tous les articles de la database.
     */
    private $_articles;
    /**
     * 
     * @var array Commandes : toutes les commandes de la database.
     */
    private $_commandes;
	/**
	 * @see Action::run()
	 */
	public function run()
	{	     
    		$this->setView(getViewByName("Gerant"));
    		$this->setUtilisateurs($this->database->getAllUsers());
    		$this->getView()->setUtilisateurs($this->getUtilisateurs());
    		$this->setArticles($this->database->trouveArticles(""));
    		$this->getView()->setArticles($this->getArticles());
    		$this->setCommandes($this->database->trouveCommandes());
    		$this->getView()->setCommandes($this->getCommandes());
	}
	/**
	 *     Mutateur de la variable d'instance $utilisateurs.
	 *     @param array Utilisateur
	 */
	public function setUtilisateurs($uts){
	    $this->_utilisateurs = $uts;
	}
	/**
	 *     Accesseur de la variable d'instance $utilisateurs.
	 *     @return array Utilisateur
	 */
	public function getUtilisateurs(){
	     return $this->_utilisateurs;
	}
	/**
	 *     Mutateur de la variable d'instance $_articles.
	 *     @param array Article
	 */
	public function setArticles($arts){
	    $this->_articles = $arts;
	}
	/**
	 *     Accesseur de la variable d'instance $_articles.
	 *     @return array Article
	 */
	public function getArticles(){
	    return $this->_articles;
	}
	/**
	 *     Accesseur de la variable d'instance $_commandes.
	 *     @return array Commandes
	 */
	public function getCommandes(){
	    return $this->_commandes;
	}
	/**
	 *     Mutateur de la variable d'instance $_commandes.
	 *     @param array Commmandes
	 */
	public function setCommandes($commandes){
	    $this->_commandes = $commandes;
	}
}
?>