<?php
include_once __DIR__.'/../exceptions/AdresseException.class.php';

class Adresse{
    /**
     * id de l'adresse.
     */
    private $_id;
    /**
     * Rue de l'adresse.
     */
    private $_rue;
    /**
     * Numero de l'adresse.
     */
    private $_numero;
    /**
     * Numéro de boite de l'adresse.
     */
    private $_numBoite;
    /**
     * Code postal de l'adresse.
     */
    private $_codePostal;
    /**
     * Localité de l'adresse.
     */
    private $_localite;
    /**
     * Pays de l'adresse.
     */
    private $_pays;
    
    /**
     * @param string $rue : Rue de l'adresse.
     * @param string $numero : Numero de l'adresse.
     * @param string $numBoite : Numéro de boite de l'adresse.
     * @param string $codePostal : Code postal de l'adresse.
     * @param string $localite : Localite de l'adresse.
     * @param string $pays : Pays de l'adresse.
     */
    public function __construct($rue, $numero, $numBoite, $codePostal, $localite, $pays) {
        $this->_id = 0;
        $this->_rue = $rue;
        $this->_numero = $numero;
        $this->_numBoite = $numBoite;
        $this->_codePostal = $codePostal;
        $this->_localite = $localite;
        $this->_pays = $pays;
    }
    /**
     * @return int L'id de l'adresse.
     */
    public function getId() {
        return $this->_id;
    }
    /**
     * @param int $id : id de l'adresse.
     * @throws AdresseException : si l'id n'est pas un nombre entier positif
     */
    public function setId($id) {
        $id = ( int ) $id;
        if ($id >= 0)
            $this->_id = $id;
        else
            throw new AdresseException("<strong>id invalide : " . $id . "</strong>");
    }
    
    /**
     * @return string La rue de l'adresse
     */
    public function getRue() {
        return $this->_rue;
    }
    /**
     * @param string $rue : la rue de l'adresse.
     * @throws AdresseException : si la rue n'est pas renseigné
     */
    public function setRue($rue) {
        $rue = trim($rue);
        if(strlen($rue)!==0)
            $this->_rue = $rue;
        else
            throw new AdresseException("<strong>Rue non renseignée : " . $id . "</strong>");
    }
    /**
     * @return string Le numéro de l'adresse
     */
    public function getNumero() {
        return $this->_numero;
    }
    /**
     * @param string $num : Le numéro de l'adresse.
     * @throws AdresseException : si le numéro n'est pas renseigné
     */
    public function setNumero($num) {
        $num = trim($num);
        if(strlen($num)!==0)
            $this->_rue = $num;
        else
            throw new AdresseException("<strong>Numéro non renseignée : " . $id . "</strong>");           
    }
    /**
     * @return string La boite de l'adresse
     */
    public function getNumeroBoite() {
        return $this->_numBoite;
    }
    /**
     * @param string $num : Le numéro de boite de l'adresse.
     * @throws AdresseException : si le numéro de boite n'est pas renseigné
     */
    public function setNumeroBoite($num) {
        $num = trim($num);
        if(strlen($num)!==0)
            $this->_numBoite = $num;
        else
            throw new AdresseException("<strong>Numéro de la boite non renseignée : " . $id . "</strong>");
    }
    /**
     * @param string : le code postal de l'adresse.
     * @throws AdresseException : Le code postal n'est pas renseigné
     */
    public function setCodePostal($cod) {
        $cod = trim($cod);
        $lg = strlen($cod);
        if ($lg !== 0) {
            $this->_codePostal = $cod;
        } else {
            throw new AdresseException("<strong>Pas de code postal.</strong>");
        }
    }
    /**
     * @return string : Le code postal de l'adresse.
     */
    public function getCodePostal() {
        return $this->_codePostal;
    }
    /**
     * @param string : La localité de l'adresse.
     * @throws AdresseException : la localité doit être une chaîne de caractère non vide.
     */
    public function setLocalite($loc){
        $nom = trim($loc);
        if( strlen($loc)!==0 ){
            $this->_localite = $loc;
        }else{
            throw new AdresseException("<strong>Veuillez introduire une localité valide.</strong>");
        }
    }
    /**
     * @return string : La localité de l'adresse..
     */
    public function getLocalite(){
        return $this->_localite;
    }
    /**
     * @param string : Le pays de l'adresse.
     * @throws AdresseException : le pays doit être une chaîne de caractère non vide.
     */
    public function setPays($loc){
        $nom = trim($loc);
        if( strlen($loc)!==0 ){
            $this->_pays = $loc;
        }else{
            throw new AdresseException("<strong>Veuillez introduire un pays valide.</strong>");
        }
    }
    /**
     * @return string : Le pays de l'adresse..
     */
    public function getPays(){
        return $this->_pays;
    }
    /**
     * @return string : retourne l'adresse sous forme d'une chaîne de caractères.
     */
    public function __toString() {
        return '{"id"="' . $this->_id . '","rue"="' . $this->_rue . '","numero"="' .
                $this->_numero . '","numeroBoite"="' . $this->_numBoite . 
                '","codePostal"="' . $this->_codePostal . '","localite"="' . $this->_localite .
                '","pays"="' . $this->_pays . '"}';
    }
    public function __destruct(){
        unset($this->_id);
        unset($this->_denomination);
        unset($this->_prixUnitaire);
        unset($this->_commentaire);
        unset($this->_enVente);
    }
    
}