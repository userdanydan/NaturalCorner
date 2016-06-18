<?php
include_once __DIR__.'/../exceptions/PanierException.class.php';

class Panier{
    /**
     * id du panier.
     */
    private $_id;
    /**
     * Lignes du panier.
     */
    private $_lignes;
    /**
     * Nombre de lignes;
     */
    private $_nbLignes;  
    /**
     * Constructeur d'un Panier.
     */
    public function __construct() {
        $this->_lignes=array();
    }
    /**
     * @param int $id : id  du panier.
     * @throws PanierException : si l'id n'est pas un nombre entier positif
     */
    public function setId($id) {
        $id = ( int ) $id;
        if ($id >= 0)
            $this->_id = $id;
            else
                throw new PanierException("<strong>id invalide : " . $id . "</strong>");
    }
    
    /**
     * @return int L'id du panier.
     */
    public function getId() {
        return $this->_id;
    }
    /**
     * Nb de lignes du panier.
     * @return nt $nbLignes:
     */
    public function getNbLignes(){
        return $this->_nbLignes;
    }
    /**
     * Accéder à une ligne au panier.
     * @param int $nbLigne
     * @return LignePanier $ligne
     */
    public function getLignePanier($nbLigne) {
        if($nbLigne>=0 AND $nbLigne< $this->_nbLignes){
            return $this->_lignes[$nbLigne];
        }else 
            throw new PanierException("Numéro de ligne invalide.");
            
    }
    /**
     * Retourne le prix total du panier.
     * @return int le prix du panier.
     */
    public function getTotal() {
        $total = 0;
        foreach($this->_lignes as $ligne){
            $total += $ligne->getMontant();
        }
        return $total;
    }
    /**
     * Recalculer le nombre d'article d'une ligne du panier.
     * @param int $nbLigne Le numéro de la ligne.
     * @param int $quantite la quantité d'article.
     */
    public function recalculer($nbLigne, $quantite) {
        if($nbLigne>=0 AND $nbLigne< $this->_nbLignes){
            $this->_lignes[$nbLigne]->setQuantite($quantite);
        }else
            throw new PanierException("Numéro de ligne invalide.");
    }
    /**
     * Retourne le nombre d'articles du panier.
     * @return int le nombre d'articles.
     */
    public function getNombreArticle() {
        $nombreArticle = 0;
        foreach($this->_lignes as $ligne){
            $nombreArticle+=$ligne->getQuantite();
        }
        return $nombreArticle;
    }
    /**
     * Ajouter une ligne au panier.
     * @param LignePanier $ligne
     */
    public function ajouterLigne(LignePanier $ligne) {
        array_push($this->_lignes, $ligne);
        $this->_nbLignes++;
    }
    /**
     * Vider le panier
     */
    public function vider() {
        foreach($this->_lignes as &$ligne){
            $ligne=null;
        }
    }
    /**
     * Retirer une ligne au panier.
     * @param int numero de la ligne
     */
    public function retirerLigne($nbLigne) {
        $nbLigne=(int)$nbLigne;
        if($nbLigne>=0 AND $nbLigne< $this->_nbLignes){
            unset($this->_lignes[$nbLigne]);
            $this->_lignes = array_values($this->_lignes);
        }else 
            throw new PanierException("Numéro de ligne invalide.");
    }
    /**
     * @return string : retourne une représentation JSON d'un panier.
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
}