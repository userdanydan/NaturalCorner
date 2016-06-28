<?php
include_once  __DIR__.'/../actions/Action.inc.php';
include_once  __DIR__.'/../model/Panier.class.php';
include_once  __DIR__.'/../model/LignePanier.class.php';
include_once  __DIR__.'/../controlers/CtrlPanier.class.php';

class PanierAction extends Action
{
    use CtrlPanier;
    public static $idLigne;
	/**
	 * @see Action::run()
	 */
	public function run(){
		//var_dump($this->getPanier());
	    if(isset($_POST['articles'])){		    
		    if(!empty($_POST['articles'])){
		       if($this->getPanier()==NULL){
		           $this->setPanier(new Panier());
		       }
               foreach($_POST['articles'] as $ligne){
		          $this->ajouterLigne( $_SESSION['id_ligne']++, 
		                               $this->database->getArticle($ligne['nom']), 
		                               $ligne['nb']);
               }
               $this->setView(getViewByName("Panier"));
               $this->getView()->setPanier($this->getPanier());
		    }elseif ($this->getPanier()!==NULL){
    		    $this->setView(getViewByName("Panier"));
    		    $this->getView()->setPanier($this->getPanier());
		    }
		}elseif(isset($_POST['submit_recalculer'])){
		    $i=0;
		    if(isset($_POST['lignes'])){
		        if(!empty($_POST['lignes'])){
        		    foreach($_POST['lignes'] as $id =>$articles){
        		        if(isset($articles['nbSupression'])){
        		            if($articles['nbSupression']==1){
            		            $this->supprimerLigne($id);
        		            }
        		        }else{
        		            $this->modifierQuantiteLigne($i, $articles['nbArticles']);
        		        }
        		        $i++;
        		    }
		        }
		    }
		    $this->setView(getViewByName("Panier"));
		    $this->getView()->setPanier($this->getPanier());
	    }elseif(isset($_POST['submit_commander'])){
	        //var_dump($_POST);
	        $this->setView(getViewByName("Commander"));
	        $this->getView()->setPanier($this->getPanier());
	    }else{
		    $this->setView(getViewByName("Panier"));  
		    $this->getView()->setPanier($this->getPanier());
		    $this->getView()->setMessage("Aucun élément ajouté au panier.");
		}
		
	}
}
?>