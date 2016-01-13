<?php
include_once __DIR__.'/../exceptions/UtilisateurException.class.php';

class Utilisateur{
	/**
	 * id de l'utilisateur.
	 */
	private $_id;
	/**
	 * Prénom de l'utilisateur. 
	 */
	private $_prenom;
	/**
	 * Nom de l'utilisateur. 
	 */
	private $_nom;
	/**
	 * Pseudo de l'utilisateur. 
	 */
	private $_pseudo;
	/**
	 * Mot de passe de l'utilisateur. 
	 * /
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
	 * @param int $id : id de l'utilisateur.
	 * @throws UtilisateurExceptions : si l'id n'est pas un nombre entier positif
	 */
	public function setId($id){
		$id=(int)$id;
		if($id>=0)
			$this->id=$id;
		else 
			throw new exceptions/UtilisateurException("<strong>id invalide : ".$id."</strong>");
	}
	/**
	 * @return int L'id de l'utilisateur.
	 */
	public function getId(){
		return $this->_id;
	}
	/**
	 * @param string $pr : Le prénom de l'utilisateur.
	 * @throws UtilisateurException : le prénom doit contenir au mois trois lettres.
	 */
	public function setPrenom($pr){
		echo("coucou1");
		$pr = trim($pr);
		echo("coucou2");
		
		if( strlen($pr)!=0 AND preg_match('#^[0-9a-zA-Z]{3,128}$#', $pr) ){
			echo("coucou3");
				
			$this->_prenom = $pr;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire un prénom d'au moins trois lettres et sans chiffre.</strong>");
		}
	}
	/**
	 * @return string : Le prénom de l'utilisateur.
	 */
	public function getPrenom(){
		return $this->_prenom;
	}
	/**
	 * @param string $nom : Le nom de l'utilisateur.
	 * @throws UtilisateurException : le nom doit contenir au mois trois lettres.
	 */
	public function setNom($nom){
		$nom = trim($nom);
		if( strlen($nom)!=0 AND preg_match('#^[0-9a-zA-Z]{3,128}$#', $nom) ){
			$this->_nom = $nom;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire un prénom d'au moins trois lettres et sans chiffre.</strong>");
		}
	}
	/**
	 * @return string : Le nom de l'utilisateur.
	 */
	public function getNom(){
		return $this->_nom;
	}
	/**
	 * @param string $pseudo : Le prénom de l'utilisateur.
	 * @throws UtilisateurException : le pseudo doit contenir au mois trois lettres.
	 */
	public function setPseudo($pseudo){
		$pseudo = trim($pseudo);
		if( strlen($pseudo)!=0 AND preg_match('#^[0-9a-zA-Z]{3,128}$#', $pseudo) ){
			$this->_pseudo = $pseudo;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire un pseudo d'au moins trois lettres et sans chiffre.</strong>");
		}
	}
	/**
	 * @return string : Le pseudo de l'utilisateur.
	 */
	public function getPseudo(){
			return $this->_pseudo;
	}
	/**
	 * @param string : le mot de passe de l'utilisateur.
	 * @throws UtilisateurException : le mot de passe doit contenir au moins 6 lettres, une lettre majuscule, une lettre minuscule et un chiffre.
	 */
	public function setPass($pass){
		$pass = trim($pass);
		$majuscule = preg_match('@[A-Z]@', $pass);
		$minuscule = preg_match('@[a-z]@', $pass);
		$nombre    = preg_match('@[0-9]@', $pass);
		if(!$majuscule || !$minuscule || !$nombre || strlen($pass) < 6) {
			throw new UtilisateurException("<strong>Veuillez introduire un mot de passe d'au moins 6 caractères.</strong>");
		}else{
			$this->_pass=$pass;
		}
	}
	/**
	 * @return string : Le mot de passe chiffré de l'utilisateur.
	 */
	public function getPass(){
		return $this->_pass;
	}
	/**
	 * @param string : l'adresse email de l'utilisateur.
	 * @throws UtilisateurException : L'adresse email doit être valide.
	 */
	public function setAdresseMail($adr){
		$adr = trim($adr);
		if( strlen($adr)!=0 AND preg_match('#^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$#', $adr) ){
			$this->_adresseMail = $adr;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire une adresse e-mail valide</strong>");
		}
	}
	/**
	 * @return string : L'adresse email de l'utilisateur.
	 */
	public function getAdresseMail(){
		return $this->_adresseMail;
	}
	/**
	 * @param string : l'adresse de l'utilisateur.
	 * @throws UtilisateurException : L'adresse doit être existante.
	 */
	//TODO API Google map pour checker l'existence de l'adresse. 
	public function setAdressePhysique($adr){
		$adr = trim($adr);
		if( strlen($adr)!=0 ){
			$this->_adresseMail = $adr;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire une adresse valide</strong>");
		}
	}
	/**
	 * @return string : L'adresse de l'utilisateur.
	 */
	public function getAdressePhysique(){
		return $this->_adressePhysique;
	}
	/**
	 * @param string : le code postal de l'utilisateur.
	 * @throws UtilisateurException : Le code postal doit être une chaîne de caractère de 4 ou 5 lettres.
	 */
	public function setCodePostal($cod){
		$cod = trim($cod);
		$lg = strlen($cod);
		if( $lg!=0 AND ($lg == 4 OR $lg == 5)){
			$this->_codePostal = $cod;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire un code postal ayant 4 ou 5 caractères.</strong>");
		}
	}
	/**
	 * @return string : Le code postal de l'utilisateur.
	 */
	public function getCodePostal(){
		return $this->_codePostal;
	}
	/**
	 * @param string : La localité de l'utilisateur.
	 * @throws UtilisateurException : la localité doit être une chaîne de caractère non vide.
	 */
	public function setLocalite($loc){
		$nom = trim($loc);
		if( strlen($loc)!=0 ){
			$this->_localite = $loc;
		}else{
			throw new UtilisateurException("<strong>Veuillez introduire une localité valide.</strong>");
		}
	}
	/**
	 * @return string : La localité de l'utilisateur.
	 */
	public function getLocalite(){
		return $this->_localite;
	}
	/**
	 * @param DateTime :  de l'utilisateur.
	 * @throws UtilisateurException : correspond à une date de type DateTime.
	 */
	public function setDateInscription(DateTime $dat){
		if($dat instanceof DateTime){
			$this->_dateInscription=$dat;
		}else {
			throw new UtilisateurException("<strong>Veuillez introduire un horodatage valide.</strong>");
		}
	}
	/**
	 * @return string : retourne la date d'inscription au format ->format('Y-m-d H:i:s').
	 */
	public function getDateInscription(){
		return $this->_dateInscription->format('Y-m-d H:i:s');
	}
	/**
	 * @param string : ip de l'utilisateur.
	 */
	public function setIdConnexion($id){
		$ip=trim($ip);
		if(strlen($ip)!=0)
			$this->_idConnexion=$id;
	}
	/**
	 * @return string : retourne l'ip.
	 */
	public function getIdConnexion(){
		return $this->_idConnexion;
	}
	/**
	 * @return string : retourne un utilisateur.
	 */
	public function __toString(){
		return "<p>".$_prenom.", ".$_nom.", ".$_pseudo.", ".$_pass.", ".$_adresseMail.
		", ".$_adressePhysique.", ".$_codePostal.", ".$_localite.", ".$_dateInscription.", ".$_idConnexion."</p>";
	}
	public function __destruct(){
		unset($this->_id);
		unset($this->_prenom);
		unset($this->_nom);
		unset($this->_pseudo);
		unset($this->_pass);
		unset($this->_adresseMail);
		unset($this->_adressePhysique);
		unset($this->_codePostal);
		unset($this->_localite);
		unset($this->_dateInscription);
		unset($this->_idConnexion);
	}
}


