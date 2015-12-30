<?php


class Utilisateur{
	private $_id;
	private $_prenom;
	private $_nom;
	private $_pseudo;
	private $_pass;
	private $_adresseMail;
	private $_adressePhysique;
	private $_codePostal;
	private $_localite;
	private $_dateInscription;
	private $_idConnexion;
	
	public function __construct($prenom, $nom, $pseudo, $pass, $adresseMail, 
			$adressePhysique, $codePostal, $localite, $dateInscription, $idConnexion){
		$this->setId(0);
		$this->setPrenom($prenom);
		$this->setNom($nom);
		$this->setPseudo($pseudo);
		$this->setPass($pass);
		$this->setAdresseMail($adresseMail);
		$this->setAdressePhysique($adressePhysique);
		$this->setCodePostal($codePostal);
		$this->setLocalite($localite);
		$this->setDateInscription($dateInscription);
		$this->setIdConnexion($idConnexion);
	}
	//TODO verifier les paramètres en entrées.
	public function setId($id){
		$id=(int)$id;
		if($id>=0)
			$this->id=$id;
		else throw Exception("id invalide");
	}
	public function getId(){
		return $this->_id;
	}
	public function setPrenom($pr){	

		$this->_prenom = $pr;
	}
	public function getPrenom(){
		return $this->_prenom;
	}
	public function setNom($nom){
		$this->_nom=$nom;
	}
	public function getNom(){
		return $this->_nom;
	}
	public function setPseudo($pseudo){
		$this->_pseudo=$pseudo;
	}
	public function getPseudo(){
			return $this->_pseudo;
	}
	public function setPass($pass){
		$this->pass=sha1($pass);
	}
	public function getPass(){
		$this->_pass;
	}
	public function setAdresseMail($adr){
		$this->_adresseMail=$adr;
	}
	public function getAdresseMail(){
		return $this->_adresseMail;
	}
	public function setAdressePhysique($adr){
		$this->_adressePhysique=$adr;
	}
	public function getAdressePhysique(){
		return $this->_adressePhysique;
	}
	public function setCodePostal($cod){
		$this->_codePostal=$cod;
	}
	public function getCodePostal(){
		return $this->_codePostal;
	}
	public function setLocalite($loc){
		$this->_localite=$loc;
	}
	public function getLocalite(){
		return $this->_localite;
	}
	public function setDateInscription($dat){
		$this->_dateInscription=$dat;
	}
	public function getDateInscription(){
		return $this->_dateInscription;
	}
	public function setIdConnexion($id){
		$this->_idConnexion=$id;
	}
	public function getIdConnexion(){
		return $this->_idConnexion;
	}
	public function __toString(){
		return "<p>".$_prenom.", ".$_nom.", ".$_pseudo.", ".$_pass.", ".$_adresseMail.
		", ".$_adressePhysique.", ".$_codePostal.", ".$_localite.", ".$_dateInscription.", ".$_idConnexion."</p>";
	}
}


