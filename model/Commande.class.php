<?php
class Commande{
    /**
     * id de la commande.
     */
    private $_id;
    /**
     * date de la commande.
     */
    private $_date;
    /**
     * Utilisateur de la commande.
     */
    private $_utilisateur;
    /**
     * Panier de la commande.
     */
    private $_panier;
    
    /**
     * @param string $categorie : Catégorie.
     */
    public function __construct($date, Utilisateur $uti, Panier $pan) {
        $this->_id = 0;
        $this->_date = $date;
        $this->_utilisateur=$uti;
        $this->_panier=$pan;
    }
    /**
     * @param int $id : id du commande.
     * @throws CommandeException : si l'id n'est pas un nombre entier positif
     */
    public function setId($id) {
        $id = ( int ) $id;
        if ($id >= 0)
            $this->_id = $id;
        else
            throw new Exception("<strong>id invalide : " . $id . "</strong>");
    }
    
    /**
     * @return int L'id de la commande.
     */
    public function getId() {
        return $this->_id;
    }
    /**
     * @return string : date.
     */
    public function getDate() {
        return $this->_date;
    }
    /**
     * @return string : Utilisateur.
     */
    public function getUtilisateur() {
        return $this->_utilisateur;
    }
    /**
     * @return string : panier.
     */
    public function getPanier() {
        return $this->_panier;
    }
    /**
     * @return string : retourne une représentation JSON de la catégorie.
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
     * Retourne la commande sous forme d'une chaîne de caractères.
     * @return string : l'article (JSON).
     */
    public function __toString() {
        return '{"id"="' . $this->_id . '","date"="' . $this->_date . '","utilisateur"="' . $this->_utilisateur . '","panier"="' . $this->_panier . '"}';
    }
    /**
     * Destructeur de l'objet.
     */
    public function __destruct(){
        unset($this->_id);
        unset($this->_categorie);
    }
}