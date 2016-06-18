<?php
class Rayon {
    
    /**
     * id du rayon.
     */
    private $_id;
    /**
     * Emplacement du rayon.
     */
    private $_emplacement;
    
    /**
     * @param string $emplacement : Emplacement du rayon.
     */
    public function __construct($emplacement) {
        $this->_id = 0;
        $this->_emplacement = $emplacement;
    }
    /**
     * @param int $id : id du rayon.
     * @throws RayonException : si l'id n'est pas un nombre entier positif
     */
    public function setId($id) {
        $id = (int) $id;
        if ($id >= 0)
            $this->_id = $id;
        else
            throw new RayonException("<strong>id invalide : " . $id . "</strong>");
    }
    
    /**
     * @return int L'id du rayon.
     */
    public function getId() {
        return $this->_id;
    }
    /**
     * @param string $emplacement : Emplacement du rayon.
     */
    public function setEmplacement($emplacement) {
        $emplacement = trim($emplacement);
        $this->_emplacement = $emplacement;
    }
    /**
     * @return string : Emplacement du rayon.
     */
    public function getEmplacement() {
        return $this->_emplacement;
    }
    /**
     * @return string : retourne une représentation JSON du rayon.
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
     * Retourne le rayon sous forme d'une chaîne de caractères.
     * @return string : le rayon (JSON).
     */
    public function __toString() {
        return '{"id"="' . $this->_id . '","emplacement"="' . $this->_emplacement . '"}';
    }
    /**
     * Destructeur de l'objet.
     */
    public function __destruct(){
        unset($this->_id);
        unset($this->_emplacement);
    }
    
}