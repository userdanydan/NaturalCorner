<?php
include_once("views/View.inc.php");

class ModifierArticleView extends View {
    /**
     *
     * @var Article $article : l'article à montrer pour la vue.
     */
    private $_article;
	/**
	 * Affiche une page pour gérer le catalogue.
	 *
	 * @see View::displayBody()
	 */
	protected function displayBody() {
		include('views/templates/modifier_articles.inc.php');
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