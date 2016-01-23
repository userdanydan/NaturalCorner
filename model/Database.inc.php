<?php
include_once __DIR__.'/../exceptions/EmailAlreadyTakenException.class.php';

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
				$this->connection = new pdo('mysql:host=127.0.0.1:3306;dbname=NATURAL_CORNER_TEST', 'root', '', 
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
			
			$this->connection->beginTransaction(); // pour assurer le caractère ACID de la base de données.
			$succes = $this->connection->query("CREATE TABLE IF NOT EXISTS UTILISATEURS(
									        ID_UTILISATEUR   int (11) Auto_increment  NOT NULL ,
									        PRENOM           Varchar (128) ,
									        NOM              Varchar (128) ,
									        PSEUDO           Varchar (128) ,
									        PASS             Varchar (1024) ,
									        ADRESSE_MAIL     Varchar (128) ,
									        ADRESSE_PHYSIQUE Varchar (128) ,
									        CODE_POSTAL      Varchar (5) ,
									        LOCALITE         Varchar (128) ,
									        DATE_INSCRIPTION Datetime ,
									        IP_CONNEXION     Varchar(128),
									        PRIMARY KEY (ID_UTILISATEUR )
										)ENGINE=InnoDB;");
			if ($success) 
				$this->connection->commit();
			else 
				$this->connection->rollback();
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
	 * @param string  l'adresse e-mail.
	 * @return Utilisateur  l'utilisateur recherché. 
	 */
	public function getUser($email){
		$userTrouve=false;
		$this->creerConnexion();		
		$requete = $this->connection->prepare(" SELECT *
												FROM UTILISATEURS
												WHERE ADRESSE_MAIL=:EMAIL");
		$userTrouve=$requete->execute(array(':EMAIL'=>$email));
		$ligneBDD = $requete->fetch();
		$utilisateur = new Utilisateur($ligneBDD["PRENOM"], $ligneBDD["NOM"], $ligneBDD["PSEUDO"], 
										$ligneBDD["PASS"], $ligneBDD["ADRESSE_MAIL"],
										$ligneBDD["ADRESSE_PHYSIQUE"], $ligneBDD["CODE_POSTAL"], $ligneBDD["LOCALITE"], 
										new DateTime("NOW"), $ligneBDD["IP_CONNEXION"]);
		$requete->closeCursor();
		//print_r(clone $utilisateur);
		return  $utilisateur;
	}
	/**
	 * Ajoute dans la base de donnée un utilisateur.
	 * @param Utilisateur l'utilisateur à insérer.
	 * @return boolean indique si l'insertion est réussie.
	 * @throws EmailAlreadyTakenException si l'email existe déjà dans la base de données.
	 */
	public function addUser(Utilisateur $utilisateur){
		if(!$this->checkEmailAvailability($utilisateur->getAdresseMail()))
			throw new EmailAlreadyTakenException("Cet email est déjà dans notre base de données.");
		$insertionReussie=false;
		$this->creerConnexion();
		$requete = $this->connection->prepare(" INSERT INTO UTILISATEURS(PRENOM, NOM, PSEUDO, PASS, ADRESSE_MAIL, ADRESSE_PHYSIQUE,
													CODE_POSTAL, LOCALITE, DATE_INSCRIPTION, IP_CONNEXION)
												VALUES(:PRENOM, :NOM, :PSEUDO, :PASS, :ADRESSE_MAIL, :ADRESSE_PHYSIQUE,
													:CODE_POSTAL, :LOCALITE, :DATE_INSCRIPTION, :IP_CONNEXION)");
		$insertionReussie = $requete->execute(array(
				':PRENOM'=>$utilisateur->getPrenom(),
				':NOM'=>$utilisateur->getNom(), 
				':PSEUDO'=>$utilisateur->getPSeudo(), 
				':PASS'=>$utilisateur->getPass(), 
				':ADRESSE_MAIL'=>$utilisateur->getAdresseMail(), 
				':ADRESSE_PHYSIQUE'=>$utilisateur->getAdressePhysique(),
				':CODE_POSTAL'=>$utilisateur->getCodePostal(), 
				':LOCALITE'=>$utilisateur->getLocalite(), 
				':DATE_INSCRIPTION'=>$utilisateur->getDateInscription(), 
				':IP_CONNEXION'=>$utilisateur->getIdConnexion()
		));
		$requete->closeCursor();
		return $insertionReussie;
	}
	/**
	 * Retire de la base de donnée un utilisateur.
	 * @param string $prenom -> le prénom
	 * @param string $nom -> le nom
	 * @param string $pseudo -> le pseudo
	 * @return boolean indique si le retrait est réussie.
	 */
	public function removeUser($email){
		$estDetruit;
		$this->creerConnexion();
		$requete = $this->connection->prepare(" DELETE FROM UTILISATEURS
												WHERE ADRESSE_MAIL=:EMAIL");
		$estDetruit = $requete->execute(array(
				':EMAIL'=>$email
		));
		$requete->closeCursor();
		return $estDetruit;
		
	}
	/**
	 * Met à jour dans la base de donnée un utilisateur.
	 * @param Utilisateur $utilisateurMisAJour -> un utilisateur avec les nouvelles données.
	 * @param string $email -> l'email de l'utilisateur à modifier.
	 * @return boolean indique si la mise à jour est réussie.
	 * @throws EmailAlreadyTakenException si l'email à modifier est déjà pris.
	 */
	public function updateUser(Utilisateur $utilisateurMisAJour, $email){
		$estMisAJour=false;
		$email=trim($email);
		if($utilisateurMisAJour->getAdresseMail()!==$email)
			if(!$this->checkEmailAvailability($utilisateurMisAJour->getAdresseMail()))
				throw new EmailAlreadyTakenException("Cet email existe déjà dans notre base de données.");
		$this->creerConnexion();
		$requete = $this->connection->prepare(" UPDATE UTILISATEURS
												SET PRENOM=:prenom, NOM=:nom, PSEUDO=:pseudo, 
													PASS=:pass, ADRESSE_MAIL=:adresse_mail, 
													ADRESSE_PHYSIQUE=:adresse_physique,
													CODE_POSTAL=:code_postal, LOCALITE=:localite, 
													DATE_INSCRIPTION=:date_inscription, 
													IP_CONNEXION=:IP_CONNEXION
												WHERE ADRESSE_MAIL=:EMAIL");
		$estMisAJour = $requete->execute(array(
				':prenom'=> $utilisateurMisAJour->getPrenom(),
				':nom'=> $utilisateurMisAJour->getNom(),
				':pseudo'=> $utilisateurMisAJour->getPseudo(),
				':pass'=> $utilisateurMisAJour->getPass() ,
				':adresse_mail' => $utilisateurMisAJour->getAdresseMail(),
				':adresse_physique' => $utilisateurMisAJour->getAdressePhysique(),
				':code_postal' => $utilisateurMisAJour->getCodePostal(),
				':localite' => $utilisateurMisAJour->getLocalite(),
				':date_inscription' => $utilisateurMisAJour->getDateInscription(),
				':IP_CONNEXION' =>$utilisateurMisAJour->getIdConnexion(),
				':EMAIL'=>$email
		));
		$requete->closeCursor();
		return $estMisAJour;
	}
	/**
	 * Vérifie qu'un couple (pseudonyme, mot de passe) est correct.
	 *
	 * @param string $nickname Pseudonyme.
	 * @param string $password Mot de passe.
	 * @return boolean True si le couple est correct, false sinon.
	 */
	public function checkPassword($email, $password)
	{
		try{
			$req = $this->connection->prepare("SELECT PSEUDO, ADRESSE_MAIL, PASS
											   FROM UTILISATEURS
											   WHERE ADRESSE_MAIL=?");
			$req->execute(array($email));
			$ligneUtilisateur = $req->fetch();
			if(password_verify($password, $ligneUtilisateur['PASS']))
				return true;
			else
				return false;
		}finally{
			$req->closeCursor();
		}
	}
	/**
	 * Vérifie la disponibilité d'une adresse email.
	 *
	 * @param string $email Email à vérifier.
	 * @return boolean True si l'email est disponible, false sinon.
	 */
	public function checkEmailAvailability($email)
	{
		$req = $this->connection->prepare("SELECT ADRESSE_MAIL
										   FROM UTILISATEURS
										   WHERE ADRESSE_MAIL=?");
		$req->execute(array($email));
		if(count($req->fetchAll())>0)
				return false;
			else
				return true;
		}
}

?>
