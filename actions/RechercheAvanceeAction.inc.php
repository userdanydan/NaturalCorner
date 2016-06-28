<?php
include_once("actions/Action.inc.php");
include_once(__DIR__."/../controlers/CtrlRecherche.class.php");

class RechercheAvanceeAction extends Action
{
    use CtrlRecherche;
	/**
	 * @see Action::run()
	 */
	public function run()
	{
	    $resultats= array();
	    $this->setView(getViewByName("RechercheAvancee"));
	    if(!empty($_POST)){
	        $chaine = $this->getView()->chercher($_POST['prix']);
	        $resultats = $this->chercherArticle($chaine);
	        $this->setView(getViewByName("ResultatsRecherche"));
	        $this->getView()->setRecherche($resultats);
	        $this->getView()->setPanier($this->getPanier());
	    }
	}
}
?>