<?php
class Article {
    /**
     * id de l'article.
     */
    private $_id;
    /**
     * Dénomination de l'article.
     */
    private $_denomination;
    /**
     * Prix unitaire de l'article.
     */
    private $_prixUnitaire;
    /**
     * Commentaire de l'article.
     */
    private $_commentaire;
    /**
     * Etat de vente de l'article.
     */
    private $_enVente;
    /**
     * Etat de promotion de l'article.
     */
    private $_enPromo;
    /**
     * 
     * @var string : le rayon où se trouve l'article.
     */
    private $_rayon;
    
    /**
     * @param string $denomination : Dénomination de l'article.
     * @param int $prixUnitaire : Prix unitaire de l'article.
     * @param string $commentaire : Commentaire sur l'article.
     * @param bool $enVente : Etat de vente de l'article.
     * @param bool $enPromo : Etat de promotion de l'article.
     * @param Rayon $rayon : rayon de de'article.
     */
    public function __construct($denomination, $prixUnitaire, $commentaire, $enVente, $enPromo, Rayon $rayon) {
        $this->_id = 0;
        $this->_denomination = $denomination;
        $this->_prixUnitaire = $prixUnitaire;
        $this->_commentaire = $commentaire;
        $this->_enVente = (int)$enVente;
        $this->_enPromo= (int)$enPromo;
        $this->_rayon=$rayon;
    }
    
    /**
     *
     * @param int $id : id de l'article.
     * @throws ArticleException : si l'id n'est pas un nombre entier positif
     */
    public function setId($id) {
        $id = (int) $id;
        if ($id >= 0)
            $this->_id = $id;
        else
            throw new ArticleException("<strong>id invalide : " . $id . "</strong>");
    }
    
    /**
     *
     * @return int L'id de l'article.
     */
    public function getId() {
        return $this->_id;
    }
    /**
     *
     * @param Rayon $rayon : Le rayon de l'article.
     */
    public function setRayon(Rayon $rayon) {
        if($rayon!==NULL){
            $this->_rayon = $rayon;
        }
    }
    /**
     *
     * @return Rayon $rayon : Le rayon de l'article.
     */
    public function getRayon() {
        return $this->_rayon;
    }
    /**
     *
     * @param string $denom : La dénomination de l'article.
     */
    public function setDenomination($denom) {
        $denom = trim($denom);
        $this->_denomination = $denom;
    }
    /**
     *
     * @return string : La dénomination de l'article.
     */
    public function getDenomination() {
        return $this->_denomination;
    }
    /**
     *
     * @param int $prix
     *            : Le prix unitaire de l'article.
     */
    public function setPrixUnitaire($prix) {
        $prix = ( int ) $prix;
        $this->_prixUnitaire = $prix;
    }
    /**
     *
     * @return string : Le prix unitaire de l'article.
     */
    public function getPrixUnitaire() {
        return $this->_prixUnitaire;
    }
    /**
     *
     * @param string $com
     *            : Le commentaire de l'article.
     */
    public function setCommentaire($com) {
        $com = trim($com);
        $this->_commentaire = $com;
    }
    /**
     *
     * @return string : Le commentaire de l'article.
     */
    public function getCommentaire() {
        return $this->_commentaire;
    }
    /**
     * @param bool $enV : Vente de l'article.
     */
    public function setEnVente($enV) {
        $enV = ( int ) $enV;
        $this->_enVente = $enV;
    }
    /**
     *
     * @return bool : si l'article est en vente.
     */
    public function isEnVente() {
        return $this->_enVente;
    }
    /**
     *
     * @param bool $enP : Promotion de l'article.
     */
    public function setEnPromo($enP) {
        $enP = ( int ) $enP;
        $this->_enPromo = $enP;
    }
    /**
     *
     * @return bool : si l'article est en promotion.
     */
    public function isEnPromo() {
        return $this->_enPromo;
    }
    /**
     * @return string : retourne une représentation JSON d'un article.
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
     * @return string : retourne l'article sous forme d'une chaîne de caractères.
     */
    public function __toString() {
        return '{"id"="' . $this->_id . '","denomination"="' . $this->_denomination . '","prixUnitaire"="' . 
        $this->_prixUnitaire . '","commentaire"="' . $this->_commentaire . 
        '","enVente"="' .$this->_enVente . '","enPromo"="' . $this->_enPromo . '"}';
    }
    public function __destruct(){
        unset($this->_id);
        unset($this->_denomination);
        unset($this->_prixUnitaire);
        unset($this->_commentaire);
        unset($this->_enVente);
        unset($this->_enPromo);
    }
}