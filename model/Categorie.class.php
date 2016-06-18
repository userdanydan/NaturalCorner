<?php
class Categorie {
    
    /**
     * id du categorie.
     */
    private $_id;
    /**
     * Categorie du categorie.
     */
    private $_categorie;
    
    /**
     * @param string $categorie : Catégorie.
     */
    public function __construct($categorie) {
        $this->_id = 0;
        $this->_categorie = $categorie;
    }
    /**
     * @param int $id : id du categorie.
     * @throws CategorieException : si l'id n'est pas un nombre entier positif
     */
    public function setId($id) {
        $id = ( int ) $id;
        if ($id >= 0)
            $this->_id = $id;
        else
            throw new CategorieException("<strong>id invalide : " . $id . "</strong>");
    }
    
    /**
     * @return int L'id de la categorie.
     */
    public function getId() {
        return $this->_id;
    }
    /**
     * @param string $categorie : Categorie.
     */
    public function setCategorie($categorie) {
        $categorie = trim($categorie);
        $this->_categorie = $categorie;
    }
    /**
     * @return string : Categorie du categorie.
     */
    public function getCategorie() {
        return $this->_categorie;
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
     * Retourne la catégorie sous forme d'une chaîne de caractères.
     * @return string : l'article (JSON).
     */
    public function __toString() {
        return '{"id"="' . $this->_id . '","categorie"="' . $this->_categorie . '"}';
    }
    /**
     * Destructeur de l'objet.
     */
    public function __destruct(){
        unset($this->_id);
        unset($this->_categorie);
    }
    
}