<?php
include_once("actions/Action.inc.php");
include_once(__DIR__."/../model/Database.inc.php");
include_once(__DIR__."/../model/Article.class.php");

class CatalogueAction extends Action
{
    /**
     * @see Action::run()
     */
    public function run(){
        if(isset($_POST['submit'])){
            $filters = array(
                    'denomination' => array(
                            'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
                            'flags' => FILTER_NULL_ON_FAILURE ,
                    ),
                    'prix' => array(
                            'filter' => FILTER_VALIDATE_INT,
                            'flags' => FILTER_NULL_ON_FAILURE,
                    ),
                    'commentaire' => array(
                            'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
                            'flags' => FILTER_NULL_ON_FAILURE
                    ),
                    'disponibilite' => array(
                            'flags' => FILTER_NULL_ON_FAILURE
                    ));
            $form_data = filter_input_array(INPUT_POST, $filters);
            $insertionMessage='';
            $estInsere=false;
            if($form_data['denomination']!==null){
                // un signe ! pour la disponibilité.
                $rayon = $this->database->getRayon(1);
                $nouvelArticle =  new Article($form_data['denomination'], $form_data['prix'], 
                        $form_data['commentaire'], isset($form_data['disponibilite'])? 0:1, 0, $rayon);
            	try{
					$estInsere = $this->database->addArticle($nouvelArticle);
				}catch(ArticleException $eate){
					$estInsere=false;
					$insertionMessage = $eate->getMessage();
				}
				if($estInsere){
				    $this->setView(getViewByName("Catalogue"));
				    $this->setMessageView("Article correctement inséré!", "alert-success");
				}else{
				    $this->setView(getViewByName("Catalogue"));
				    $this->setMessageView("Article non inséré!", "alert-danger");
				}
            }else{
                $this->setView(getViewByName("Default"));
                $this->setMessageView("Veuillez introduire une dénomination pour l'article à insérer.", "alert-danger");
            }
        }else{
            $this->setView(getViewByName("Catalogue"));
        }
    }
}