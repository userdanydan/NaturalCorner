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
				
				$url = 'mysql:unix_socket=/cloudsql/naturalcorner:naturalcornerdb;dbname=NATURAL_CORNER';
				$this->connection = new PDO($url, $dbLogin, $dbPass);
			}catch(PDOException $ex){
				echo '<p>'.$ex->getMessage().'</p>';
				$this->createDataBase();
				die(json_encode(
						array('outcome' => false, 'message' => 'Unable to connect to google app engine.1')
								)
				);
			}
		} else {
			// Connect from a development environment.
			try{
				 $this->connection= new pdo('mysql:host=127.0.0.1:3306;dbname=NATURAL_CORNER_TEST', 'root', '');
			}catch(PDOException $ex){
				echo '<p>'.$ex->getMessage().'</p>';
				$this->createDataBase();
				die(json_encode(
						array('outcome' => false, 'message' => 'Unable to connect to localhost1')
				)
				);
			}
		}
	}
	/**
	 * Initialise la base de données ouverte dans la variable $connection.
	 * Cette méthode crée, si elles n'existent pas, les trois tables :
	 * - une table users(nickname char(20), password char(50));
	 * - une table surveys(id integer primary key autoincrement,
	 *						owner char(20), question char(255));
	 * - une table responses(id integer primary key autoincrement,
	 *		id_survey integer,
	 *		title char(255),
	 *		count integer);
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
				$this->connection = new pdo('mysql:host=127.0.0.1:3306;', 'root', '');
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
									        ID_CONNEXION     int NOT NULL ,
									        PRIMARY KEY (ID_UTILISATEUR )
										)ENGINE=InnoDB;");
		}
		catch(PDOException $pdoe)
		{
			print '<p>'.$pdoe->getMessage().'</p>';
		}
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
