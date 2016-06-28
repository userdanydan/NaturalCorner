<?php
include_once("actions/Action.inc.php");
include_once(__DIR__."/../controlers/CtrlRecherche.class.php");

class RechercheRapideAction extends Action
{
    use CtrlRecherche;
    private $mot;
    private $articles;

	/**
	 * @see Action::run()
	 */
	public function run()
	{
	    $search_html = filter_input(INPUT_POST, 'article', FILTER_SANITIZE_SPECIAL_CHARS);
		if($search_html!==null AND $search_html!==false){
		    $this->setMot($search_html);
		    $this->setRecherchesArticles($this->database->trouveArticles($this->getMot()));
		    if(count($this->getRecherchesArticles())===0){
		        $this->setMessageView("Aucun article ne correspond à votre recherche", "alert-danger");
		    }else{
    		    $this->setView(getViewByName("RechercheRapide"));
    		    $this->getView()->setPanier($this->getPanier());
    		    $this->getView()->setRecherche($this->getRecherchesArticles());	
		    }
		}else{
	       $this->setView(getViewByName("RechercheRapide"));	
	       $this->getView()->setPanier($this->getPanier());
		}
	}
	/**
	 * @return string $mot
	 */
	public function getMot()
	{
	   return $this->mot;
	}
	/**
	 * @param string $m : le mot à chercher.
	 */
	public function setMot($m)
	{
        $this->mot=trim($m);
	}
	/**
	 * Fixe les articles trouvés.
	 * @param array $articles
	 */
	public function setRecherchesArticles($articles){
	    $this->articles=$articles;
	}
	/**
	 * Le résultat de la recherche.
	 * @return les articles trouvés.
	 */
	public function getRecherchesArticles(){
	    return $this->articles;
	}
}
?>