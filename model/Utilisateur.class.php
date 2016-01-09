<?php
include_once '/Users/ivymike/Documents/workspacePHP/NaturalCorner/exceptions/UtilisateurException.class.php';

class Utilisateur{
	/**
	 * id de l'utilisateur. Il s'agit d'un identificateur unique entier supérieur ou égal à zero. 
	 */
	private $_id;
	/**
	 * Prénom de l'utilisateur. Chaîne de caractères ayant au moins deux lettres et n'excédant pas 128 caractères.
	 */
	private $_prenom;
	/**
	 * Nom de l'utilisateur. Chaîne de caractères ayant au moins deux lettres et n'excédant pas 128 caractères.
	 */
	private $_nom;
	/**
	 * Pseudo de l'utilisateur. Chaîne de caractères ayant au moins deux lettres et n'excédant pas 128 caractères.
	 */
	private $_pseudo;
	/**
	 * Mot de passe de l'utilisateur. Chaîne de caractères ayant au moins 6 caractères et n'excédant pas 128 caractères.
	 */
	private $_pass;
	/**
	 * Adresse e-mail de l'utilisateur. 
	 */
	private $_adresseMail;
	/**
	 * Adresse physique de l'utilisateur.
	 */
	private $_adressePhysique;
	/**
	 * Code postal relié à l'adresse physique de l'utilisateur.
	 */
	private $_codePostal;
	/**
	 * Localité reliée à l'adresse physique de l'utilisateur.
	 */
	private $_localite;
	/**
	 * Date d'inscription de l'utilisateur. 
	 */
	private $_dateInscription;
	/**
	 * IP de l'utilisateur lors de son inscription.
	 */
	private $_idConnexion;
	/**
	 * @param prenom : Prénom->
	 * @param nom : nom->
	 * @param pseudo : pseudo->
	 * @param pass : mot de passe->
	 * @param adresseMail : adresse e-mail->
	 * @param adressePhysique : adresse physique->
	 * @param codePostal : code postal>
	 * @param localite : localité->
	 * @param dateInscription : date de l'inscription->
	 * @param idConnexion : ip de l'utilisateur->
	 */
	public function __construct($prenom, $nom, $pseudo, $pass, $adresseMail, 
			$adressePhysique, $codePostal, $localite, $dateInscription, $idConnexion){
		/*$this->setId(0);
		$this->setPrenom($prenom);
		$this->setNom($nom);
		$this->setPseudo($pseudo);
		$this->setPass($pass);
		$this->setAdresseMail($adresseMail);
		$this->setAdressePhysique($adressePhysique);
		$this->setCodePostal($codePostal);
		$this->setLocalite($localite);
		$this->setDateInscription($dateInscription);
		$this->setIdConnexion($idConnexion);*/
		$this->_id=0;
		$this->_prenom=$prenom;
		$this->_nom=$nom;
		$this->_pseudo=$pseudo;
		$this->_pass=$pass;
		$this->_adresseMail=$adresseMail;
		$this->_adressePhysique=$adressePhysique;
		$this->_codePostal=$codePostal;
		$this->_localite=$localite;
		$this->_dateInscription=$dateInscription;
		$this->_idConnexion=$idConnexion;
	}
	//TODO verifier les paramètres en entrées.
	/**
	 * @param id : id->
	 * @throws UtilisateurExceptions
	 */
	public function setId($id){
		$id=(int)$id;
		if($id>=0)
			$this->id=$id;
		else 
			throw new UtilisateurException("<strong>id invalide : ".$id."</strong>");
	}
	public function getId(){
		return $this->_id;
	}
	/**
	 * @param pr : prénom
	 * @throws UtilisateurException 
	 */
	public function setPrenom($pr){
		$pr = trim($pr);
		if( strlen($pr)!=0 AND preg_match('#^[^0-9a-zA-Z]{3,128}$#', $pr) ){
			$this->_prenom = $pr;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire un prénom d'au moins trois lettres et sans chiffre.</strong>");
		}
	}
	public function getPrenom(){
		return $this->_prenom;
	}
	/**
	 * @param nom : nom
	 * @throws UtilisateurException 
	 */
	public function setNom($nom){
		$nom = trim($nom);
		if( strlen($nom)!=0 AND preg_match('#^[^0-9a-zA-Z]{3,128}$#', $nom) ){
			$this->_nom = $nom;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire un prénom d'au moins trois lettres et sans chiffre.</strong>");
		}
	}
	public function getNom(){
		return $this->_nom;
	}
	/**
	 * @param pseudo : pseudo
	 * @throws UtilisateurException 
	 */
	public function setPseudo($pseudo){
		$pseudo = trim($pseudo);
		if( strlen($pseudo)!=0 AND preg_match('#^[^0-9a-zA-Z]{3,128}$#', $pseudo) ){
			$this->_pseudo = $pseudo;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire un pseudo d'au moins trois lettres et sans chiffre.</strong>");
		}
	}
	public function getPseudo(){
			return $this->_pseudo;
	}
	/**
	 * @param pass : mot de passe->
	 * @throws UtilisateurException 
	 */
	public function setPass($pass){
		$pass = trim($pass);
		if( strlen($pass)!=0 AND preg_match('#^.{6,128}$#', $pass) ){
			$this->_pass = $pass;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire un mot de passe d'au moins 6 caractères.</strong>");
		}
	}
	public function getPass(){
		return $this->_pass;
	}
	/**
	 * @param $adr : adresse e-mail
	 * @throws UtilisateurException 
	 */
	public function setAdresseMail($adr){
		$adr = trim($adr);
		if( strlen($pass)!=0 AND preg_match('#^+.+..+$#', $adr) ){
			$this->_adresseMail = $adr;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire une adresse e-mail valide</strong>");
		}
	}
	public function getAdresseMail(){
		return $this->_adresseMail;
	}
	/**
	 * @param $adr : adresse physique
	 * @throws UtilisateurException
	 */
	//TODO API Google map pour checker l'existence de l'adresse. 
	public function setAdressePhysique($adr){
		$adr = trim($adr);
		if( strlen($pass)!=0 AND preg_match('#^+.$#', $adr) ){
			$this->_adresseMail = $adr;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire une adresse valide</strong>");
		}
	}
	public function getAdressePhysique(){
		return $this->_adressePhysique;
	}
	/**
	 * @param $adr : code postal
	 * @throws UtilisateurException
	 */
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


