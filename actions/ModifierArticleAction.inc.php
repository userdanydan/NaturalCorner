<?php
include_once("actions/Action.inc.php");
class ModifierArticleAction extends Action
{   
    /**
     * 
     * @var Article $article : l'article à montrer pour la vue.
     */
    private $_article;
	/**
	 * @see Action::run()
	 */
	public function run()
	{
	    if(isset($_POST['submit'])){
	        if(isset($_POST['supprimer'])){
	            $estSupprime=false;
                $estSupprime=$this->database->removeArticle($_POST['denomination']);
	            if($estSupprime){
	                $this->setView(getViewByName("ModifierArticle"));
	                $this->setMessageView("Article correctement supprimé!", "alert-success");
	            }else{
	                $this->setView(getViewByName("ModifierArticle"));
	                $this->setMessageView("Article non supprimé!", "alert-danger");
	            }
	        }else{
    	        $filters = array(
    	                'denomination' => array(
    	                        'filter' => FILTER_SANITIZE_MAGIC_QUOTES | FILTER_SANITIZE_SPECIAL_CHARS,
    	                        'flags' => FILTER_NULL_ON_FAILURE
    	                ),
    	                'prix' => array(
    	                        'filter' => FILTER_SANITIZE_NUMBER_INT,
    	                        'flags' => FILTER_NULL_ON_FAILURE,
    	                ),
    	                'commentaire' => array(
    	                        'filter' => FILTER_SANITIZE_MAGIC_QUOTES | FILTER_SANITIZE_SPECIAL_CHARS,
    	                        'flags' => FILTER_NULL_ON_FAILURE
    	                )
    	        );
    	        $form_data = filter_input_array(INPUT_POST, $filters);
    	        $updateMessage='';
    	        $estModifie=false;
    	        if($form_data['denomination']!==null){
    	            $rayon = $this->database->getRayon(1);
    	          $estModifie=$this->database->updateArticle(new Article($form_data['denomination'], $form_data['prix'], 
    	                   $form_data['commentaire'], isset($form_data['disponibilite'])? 0:1, 0, $rayon), $form_data['denomination']);
    	        }
    	        if($estModifie){
    			    $this->setView(getViewByName("ModifierArticle"));
    			    $this->setMessageView("Article correctement modifié!", "alert-success");
    			}else{
    			    $this->setView(getViewByName("ModifierArticle"));
    			    $this->setMessageView("Article non modifié!", "alert-danger");
    			}
	        }
	    }else{
            $this->setArticle($this->database->getArticle($_POST['optionsRadio']));
    	    $this->setView(getViewByName("ModifierArticle"));
    	    $this->getView()->setArticle($this->getArticle());
	    }
	}
	/**
	 * @return Article $article : l'article à montrer pour la vue.
	 */
	public function getArticle(){
	    return $this->_article;
	}
	
	/**
	 * 
	 * @param Article $art : l'article à montrer.
	 */
	public function setArticle($art){
	    $this->_article =$art;
	}
}
?>
