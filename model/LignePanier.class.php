<?php
class LignePanier{
    /**
     * id de la ligne de panier.
     */
    private $_id;
    /**
     * L'article de la ligne du panier.
     */
    private $_article;
    /**
     * Quantité d'articles.
     */
    private $_quantite;
    /**
     * @param Article $article : L'article de la ligne du panier.
     * @param int $quantite : La quantité d'exemplaires de l'article.
     */
    public function __construct(Article $article, $quantite) {
        $this->_article=$article;
        $this->_quantite=$quantite;
    }
    /**
     * @param int $id : id de la ligne du panier.
     * @throws LignePanierException : si l'id n'est pas un nombre entier positif
     */
    public function setId($id) {
        $id = ( int ) $id;
        if ($id >= 0)
            $this->_id = $id;
            else
                throw new PanierException("<strong>id invalide : " . $id . "</strong>");
    }
    
    /**
     * @return int L'id de la ligne du panier.
     */
    public function getId() {
        return $this->_id;
    }
    /**
     * @return Article : l'article de la ligne du panier.
     */
    public function getArticle() {
        return $this->_article;
    }
    /**
     * @return int : Quantité de l'article de la ligne du panier.
     */
    public function getQuantite() {
        return $this->_quantite;
    }
    /**
     * @param int : Quantité de l'article de la ligne du panier.
     */
    public function setQuantite($quantite) {
        $quantite = (int)$quantite;
        if($quantite<0)
            throw new LignePanierException("quantité invalide");
        if($quantite>1000)
            throw new LignePanierException("quantité supérieure à 1000");
        $this->_quantite=$quantite;
    }
    /**
     * @return int : le montant de la ligne du panier.
     */
    public function getMontant() {
        return $this->_article->getPrixUnitaire()*$this->getQuantite();
    }
    /**
     * @return string : retourne une représentation JSON d'une ligne du panier.
     */
    function getJsonData() {
        $var = get_object_vars($this);
        foreach ( $var as &$value ) {
            if (is_object($value) && method_exists($value, 'getJsonData')) {
                $value = $value->getJsonData();
            }
        }
        return $var;
    }
    /**
     * Retourne l'article sous forme d'une chaîne de caractères.
     * @return string : l'article (JSON).
     */
    public function __toString() {
        return $this->getJsonData();
    }
    /**
     * Destructeur de l'objet.
     */
    public function __destruct(){
        unset($this->_id);
        unset($this->_article);
        unset($this->_quantite);
    }
    
}