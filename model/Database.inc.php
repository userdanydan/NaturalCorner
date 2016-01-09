<?php
class Database 
{

	private $connection;

	/**
	 * Ouvre la base de données. Si la base n'existe pas elle
	 * est créée à l'aide de la méthode createDataBase().
	 */
	public function __construct() 
	{
	if (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false)
		{
			// Connect from App Engine.
			try{
				$dbPass = "";
				$dbLogin = "root";
				$url = 'mysql:unix_socket=/cloudsql/naturalcorner:naturalcornerdb;';
				$this->connection = new PDO($url, $dbLogin, $dbPass);
			}catch(PDOException $ex){
				echo '<p>'.$ex->getMessage().'</p>';
				die(json_encode(
						array('outcome' => false, 'message' => 'Unable to connect to google app engine.2')
						)
						);
			}
		} else {
			// Connect from a development environment.
			try{
				$this->connection = new pdo('mysql:host=127.0.0.1:3306;dbname=NATURAL_CORNER_TEST', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}catch(PDOException $ex){
				echo '<p>'.$ex->getMessage().'</p>';
				$this->createDataBase();
				die(json_encode(
						array('outcome' => false, 'message' => 'Unable to connect to localhost2')
						)
						);
			}
		}
	}
	/**
	 * Initialise la base de données ouverte dans la variable $connection.
	 */
	private function createDataBase() 
	{
		if (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false)
		{
			// Connect from App Engine.
			try{
				$dbPass = "";
				$dbLogin = "root";
				$url = 'mysql:unix_socket=/cloudsql/naturalcorner:naturalcornerdb;';
				$this->connection = new PDO($url, $dbLogin, $dbPass);
			}catch(PDOException $ex){
				echo '<p>'.$ex->getMessage().'</p>';
				die(json_encode(
						array('outcome' => false, 'message' => 'Unable to connect to google app engine.2')
						)
						);
			}
		} else {
			// Connect from a development environment.
			try{
				$this->connection = new pdo('mysql:host=127.0.0.1:3306;', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}catch(PDOException $ex){
				echo '<p>'.$ex->getMessage().'</p>';
				die(json_encode(
						array('outcome' => false, 'message' => 'Unable to connect to localhost2')
						)
						);
			}
		}
		$this->connection->exec("CREATE DATABASE IF NOT EXISTS NATURAL_CORNER_TEST CHARACTER SET 'utf8'");
		$test= $this->connection->exec("USE NATURAL_CORNER_TEST");
		try
		{
			$this->connection->query("CREATE TABLE IF NOT EXISTS UTILISATEURS(
									        ID_UTILISATEUR   int (11) Auto_increment  NOT NULL ,
									        PRENOM           Varchar (128) ,
									        NOM              Varchar (128) ,
									        PSEUDO           Varchar (128) ,
									        PASS             Varchar (1028) ,
									        ADRESSE_MAIL     Varchar (128) ,
									        ADRESSE_PHYSIQUE Varchar (128) ,
									        CODE_POSTAL      Varchar (5) ,
									        LOCALITE         Varchar (128) ,
									        DATE_INSCRIPTION Datetime ,
									        ID_CONNEXION     Varchar(128) NOT NULL ,
									        PRIMARY KEY (ID_UTILISATEUR )
										)ENGINE=InnoDB;");
		}
		catch(PDOException $pdoe)
		{
			print '<p>'.$pdoe->getMessage().'</p>';
		}
	}
	// copier coller du site Google App Engine PHP
	private function creerConnexion(){
		if (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false)
		{
			// Connect from App Engine.
			try{
				$dbPass = "";
				$dbLogin = "root";
				$url = 'mysql:unix_socket=/cloudsql/naturalcorner:naturalcornerdb;';
				$this->connection = new PDO($url, $dbLogin, $dbPass);
			}catch(PDOException $ex){
				echo '<p>'.$ex->getMessage().'</p>';
				die(json_encode(
						array('outcome' => false, 'message' => 'Unable to connect to google app engine.2')
						)
						);
			}
		} else {
			// Connect from a development environment.
			try{
				$this->connection = new pdo('mysql:host=127.0.0.1:3306;dbname=NATURAL_CORNER_TEST', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}catch(PDOException $ex){
				echo '<p>'.$ex->getMessage().'</p>';
				die(json_encode(
						array('outcome' => false, 'message' => 'Unable to connect to localhost2')
						)
						);
			}
		}
	}
	/**
	 * Recherche dans la base de donnée un utilisateur selon son prénom, nom et pseudo.
	 * @param string  le prénom
	 * @param string  le nom
	 * @param string  le pseudo
	 * @return Utilisateur  l'utilisateur recherché. 
	 */
	public function getUser($prenom, $nom, $pseudo){
		$this->creerConnexion();		
		$requete = $this->connection->prepare(" SELECT *
												FROM UTILISATEURS
												WHERE NOM=:NOM AND PRENOM=:PRENOM AND PSEUDO=:PSEUDO");
		$requete->execute(array(':PRENOM'=>$prenom, ':NOM'=>$nom, ':PSEUDO'=>$pseudo));
		$ligneBDD = $requete->fetch();
		$utilisateur = new Utilisateur($ligneBDD["PRENOM"], $ligneBDD["NOM"], $ligneBDD["PSEUDO"], 
										$ligneBDD["PASS"], $ligneBDD["ADRESSE_MAIL"],
										$ligneBDD["ADRESSE_PHYSIQUE"], $ligneBDD["CODE_POSTAL"], $ligneBDD["LOCALITE"], 
										new DateTime($ligneBDD["DATE_INSCRIPTION"]), $ligneBDD["ID_CONNEXION"]);
		$requete->closeCursor();
		return $utilisateur;
	}
	/**
	 * Ajoute dans la base de donnée un utilisateur.
	 * @param Utilisateur l'utilisateur à insérer.
	 * @return boolean indique si l'insertion est réussie.
	 */
	public function addUser($utilisateur){
		$insertionReussie=false;
		if($utilisateur instanceof Utilisateur){
			$this->creerConnexion();
			$requete = $this->connection->prepare(" INSERT INTO UTILISATEURS(PRENOM, NOM, PSEUDO, PASS, ADRESSE_MAIL, ADRESSE_PHYSIQUE,
														CODE_POSTAL, LOCALITE, DATE_INSCRIPTION, ID_CONNEXION)
													VALUES(:PRENOM, :NOM, :PSEUDO, :PASS, :ADRESSE_MAIL, :ADRESSE_PHYSIQUE,
														:CODE_POSTAL, :LOCALITE, :DATE_INSCRIPTION, :ID_CONNEXION)");
			$insertionReussie = $requete->execute(array(
					':PRENOM'=>$utilisateur->getPrenom(),
					':NOM'=>$utilisateur->getNom(), 
					':PSEUDO'=>$utilisateur->getPSeudo(), 
					':PASS'=>$utilisateur->getPass(), 
					':ADRESSE_MAIL'=>$utilisateur->getAdresseMail(), 
					':ADRESSE_PHYSIQUE'=>$utilisateur->getAdressePhysique(),
					':CODE_POSTAL'=>$utilisateur->getCodePostal(), 
					':LOCALITE'=>$utilisateur->getLocalite(), 
					':DATE_INSCRIPTION'=>$utilisateur->getDateInscription()->format('Y-m-d H:i:s'), 
					':ID_CONNEXION'=>$utilisateur->getIdConnexion()
			));
			$requete->closeCursor();
		}
		return $insertionReussie;
	}
	/**
	 * Retire de la base de donnée un utilisateur.
	 * @param string $prenom -> le prénom
	 * @param string $nom -> le nom
	 * @param string $pseudo -> le pseudo
	 * @return boolean indique si le retrait est réussie.
	 */
	public function removeUser($prenom, $nom, $pseudo){
		$estDetruit;
		$this->creerConnexion();
		$requete = $this->connection->prepare(" DELETE FROM UTILISATEURS
												WHERE NOM=:NOM AND 
													  PRENOM=:PRENOM AND 
													  PSEUDO=:PSEUDO");
		$estDetruit = $requete->execute(array(
				':PRENOM'=>$prenom,
				':NOM'=>$nom,
				':PSEUDO'=>$pseudo
		));
		$requete->closeCursor();
		return $estDetruit;
		
	}
	/**
	 * Met à jour dans la base de donnée un utilisateur.
	 * @param Utilisateur $utilisateurMisAJour -> un utilisateur avec les nouvelles données.
	 * @param string $prenom -> le prénom
	 * @param string $nom -> le nom
	 * @param string $pseudo -> le pseudo
	 * @return boolean indique si la mise à jour est réussie.
	 */
	public function updateUser($utilisateurMisAJour, $prenom, $nom, $pseudo){
		$estMisAJour=false;
		if($utilisateurMisAJour instanceof Utilisateur){
			$this->creerConnexion();
			$requete = $this->connection->prepare(" UPDATE UTILISATEURS
													SET PRENOM=:prenom, NOM=:nom, PSEUDO=:pseudo, 
														PASS=:pass, ADRESSE_MAIL=:adresse_mail, 
														ADRESSE_PHYSIQUE=:adresse_physique,
														CODE_POSTAL=:code_postal, LOCALITE=:localite, 
														DATE_INSCRIPTION=:date_inscription, 
														ID_CONNEXION=:id_connexion
													WHERE NOM=:NOMT AND
														  PRENOM=:PRENOMT AND
														  PSEUDO=:PSEUDOT");
			$estMisAJour = $requete->execute(array(
					':prenom'=> $utilisateurMisAJour->getPrenom(),
					':nom'=> $utilisateurMisAJour->getNom(),
					':pseudo'=> $utilisateurMisAJour->getPseudo(),
					':pass'=> $utilisateurMisAJour->getPass() ,
					':adresse_mail' => $utilisateurMisAJour->getAdresseMail(),
					':adresse_physique' => $utilisateurMisAJour->getAdressePhysique(),
					':code_postal' => $utilisateurMisAJour->getCodePostal(),
					':localite' => $utilisateurMisAJour->getLocalite(),
					':date_inscription' => $utilisateurMisAJour->getDateInscription()->format('Y-m-d H:i:s'),
					':id_connexion' =>$utilisateurMisAJour->getIdConnexion(),
					':PRENOMT'=>$prenom,
					':NOMT'=>$nom,
					':PSEUDOT'=>$pseudo
			));
			$requete->closeCursor();
		}
		return $estMisAJour;
	}
	/**
	 * Vérifie qu'un couple (pseudonyme, mot de passe) est correct.
	 *
	 * @param string $nickname Pseudonyme.
	 * @param string $password Mot de passe.
	 * @return boolean True si le couple est correct, false sinon.
	 */
	public function checkPassword($nickname, $password)
	{
		$req = $this->connection->prepare("SELECT PSEUDO, PASS
										   FROM UTILISATEURS
										   WHERE PSEUDO=? AND PASS=?");
		$req->execute(array($nickname, md5($password)));
		if(count($req->fetchAll())>0)
			return true;
		else
			return false;
	}
	
// 	/**
// 	 * Vérifie si un pseudonyme est valide, c'est-à-dire,
// 	 * s'il contient entre 3 et 10 caractères et uniquement des lettres.
// 	 *
// 	 * @param string $nickname Pseudonyme à vérifier.
// 	 * @return boolean True si le pseudonyme est valide, false sinon.
// 	 */
// 	private function checkNicknameValidity($nickname) 
// 	{
// 		return preg_match('#^[a-zA-Z]{3,9}$#', $nickname);
// 	}
// 	/**
// 	 * Vérifie si un mot de passe est valide, c'est-à-dire,
// 	 * s'il contient entre 3 et 10 caractères.
// 	 *
// 	 * @param string $password Mot de passe à vérifier.
// 	 * @return boolean True si le mot de passe est valide, false sinon.
// 	 */
// 	private function checkPasswordValidity($password) 
// 	{
// 		return preg_match('#^[a-zA-Z]{3,9}$#', $password);
// 	}
// 	/**
// 	 * Vérifie la disponibilité d'un pseudonyme.
// 	 *
// 	 * @param string $nickname Pseudonyme à vérifier.
// 	 * @return boolean True si le pseudonyme est disponible, false sinon.
// 	 */
// 	private function checkNicknameAvailability($nickname) 
// 	{
// 		$req = $this->connection->prepare("SELECT NICKNAME 
// 										   FROM USERS 
// 										   WHERE NICKNAME=?");
// 		$req->execute(array($nickname));
// 		if(count($req->fetchAll())>0)
// 			return false;
// 		else
// 			return true;
// 	}

// 	/**
// 	 * Vérifie qu'un couple (pseudonyme, mot de passe) est correct.
// 	 *
// 	 * @param string $nickname Pseudonyme.
// 	 * @param string $password Mot de passe.
// 	 * @return boolean True si le couple est correct, false sinon.
// 	 */
// 	public function checkPassword($nickname, $password) 
// 	{
// 		$req = $this->connection->prepare("SELECT NICKNAME 
// 										   FROM USERS 
// 										   WHERE NICKNAME=? AND PASSWORD=?");
// 		$req->execute(array($nickname, md5($password)));
// 		if(count($req->fetchAll())>0)
// 			return true;
// 		else
// 			return false;
// 	}

// 	/**
// 	 * Ajoute un nouveau compte utilisateur si le pseudonyme est valide et disponible et
// 	 * si le mot de passe est valide. La méthode peut retourner un des messages d'erreur qui suivent :
// 	 * - "Le pseudo doit contenir entre 3 et 10 lettres.";
// 	 * - "Le mot de passe doit contenir entre 3 et 10 caractères.";
// 	 * - "Le pseudo existe déjà.".
// 	 *
// 	 * @param string $nickname Pseudonyme.
// 	 * @param string $password Mot de passe.
// 	 * @return boolean|string True si le couple a été ajouté avec succès, un message d'erreur sinon.
// 	 */
// 	public function addUser($nickname, $password) 
// 	{
// 		$erreur='';
// 		if(!$this->checkNicknameValidity($nickname))
// 		{
// 			$erreur.="<p>Pseudonyme incorrect, veuillez introduire entre 3 et 10 caractères et uniquement des lettres.</p>";
// 		}
// 		if(!$this->checkPasswordValidity($nickname))
// 		{
// 			$erreur.="<p>Mot de passe incorrect, veuillez introduire entre 3 et 10 caractères et uniquement des lettres.</p>";
// 		}
// 		if(!$this->checkNicknameAvailability($nickname))
// 		{
// 			$erreur.="<p>Pseudonyme déjà utilisé</p>";
// 		}
// 		try
// 		{
// 			 $req = $this->connection->prepare("INSERT INTO USERS(NICKNAME, PASSWORD) 
// 												VALUES(:nickname, :password)");
// 			 $req->execute( array(
// 						'nickname' => $nickname,
// 						'password' => md5($password)));
// 		}
// 		catch(PDOException $pdoe)
// 		{
// 			$erreur.="<p>L'utilisateur n'a pas été ajouté</p>";
// 		}
// 		if($erreur)
// 			return $erreur;
// 		return true;
// 	}

// 	/**
// 	 * Change le mot de passe d'un utilisateur.
// 	 * La fonction vérifie si le mot de passe est valide. S'il ne l'est pas,
// 	 * la fonction retourne le texte 'Le mot de passe doit contenir entre 3 et 10 caractères.'.
// 	 * Sinon, le mot de passe est modifié en base de données et la fonction retourne true.
// 	 *
// 	 * @param string $nickname Pseudonyme de l'utilisateur.
// 	 * @param string $password Nouveau mot de passe.
// 	 * @return boolean|string True si le mot de passe a été modifié, un message d'erreur sinon.
// 	 */
// 	public function updateUser($nickname, $password) 
// 	{
// 		$erreur='';
// 		if(!$this->checkNicknameValidity($nickname))
// 		{
// 			$erreur.="<p>Pseudonyme incorrect, veuillez introduire entre 3 et 10 caractères et uniquement des lettres.</p>";
// 		}
// 		if(!$this->checkPasswordValidity($nickname))
// 		{
// 			$erreur.="<p>Mot de passe incorrect, veuillez introduire entre 3 et 10 caractères et uniquement des lettres.</p>";
// 		}
// 		if($this->checkNicknameAvailability($nickname))
// 		{
// 			$erreur.="<p>Pseudonyme déjà utilisé</p>";
// 		}
// 		try
// 		{
// 			 $req = $this->connection->prepare("UPDATE USERS SET PASSWORD=:password 
// 												WHERE NICKNAME=:nickname");
// 			 $req->execute( array(
// 						'password' => md5($password),
// 						'nickname' => $nickname ));
// 		}
// 		catch(PDOException $pdoe)
// 		{
// 			$erreur.="<p>L'utilisateur n'a pas été mis à jour</p>";
// 		}
// 		if($erreur)
// 			return $erreur;	
// 		return true;
// 	}
}

?>
