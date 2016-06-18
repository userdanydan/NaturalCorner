<?php
include_once(__DIR__.'/../actions/Action.inc.php');
/**
 * @author Daniel
 * Contrôleur de l'article.
 */
trait CtrlArticle{
    /**
     * Contrôleur cherchant des informations sur un article
     * @param String $denom
     */
    public function getInfosArticle($denom){
        $article = $this->database->trouveArticles($denom);
        return $article[0]->_toString();
    }
}