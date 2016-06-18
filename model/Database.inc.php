<?php
include_once __DIR__.'/../exceptions/EmailAlreadyTakenException.class.php';
include_once  __DIR__.'/../model/Article.class.php';
include_once  __DIR__.'/../model/Rayon.class.php';

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
				$this->connection = new pdo('mysql:host=127.0.0.1:3306;dbname=NATURAL_CORNER;charset=utf8', 'root', '', 
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
		$this->connection->exec("CREATE DATABASE IF NOT EXISTS natural_corner CHARACTER SET 'utf8'");
		$test= $this->connection->exec("USE natural_corner");
		try
		{
			
			$this->connection->beginTransaction(); // pour assurer le caractère ACID de la base de données.
			$succes = $this->connection->query("CREATE TABLE IF NOT EXISTS UTILISATEURS(
    									        ID_UTILISATEUR   INT (11) AUTO_INCREMENT  NOT NULL ,
    									        PRENOM           VARCHAR (128) ,
    									        NOM              VARCHAR (128) ,
    									        PSEUDO           VARCHAR (128) ,
    									        PASS             VARCHAR (1024) ,
    									        ADRESSE_MAIL     VARCHAR (128) ,
    									        ADRESSE_PHYSIQUE VARCHAR (128) ,
    									        CODE_POSTAL      VARCHAR (5) ,
    									        LOCALITE         VARCHAR (128) ,
    									        DATE_INSCRIPTION DATETIME ,
    									        IP_CONNEXION     VARCHAR(128),
    									        PRIMARY KEY (ID_UTILISATEUR )
    										)ENGINE=InnoDB;");
			if ($success) 
				$this->connection->commit();
			else 
				$this->connection->rollback();
			$this->connection->beginTransaction(); 
			$succes = $this->connection->query("CREATE TABLE IF NOT EXISTS ARTICLES(
    								            ID_ARTICLE             INT (11) AUTO_INCREMENT  NOT NULL ,
    									        DENOMINATION           VARCHAR (128) ,
    									        PRIX_UNITAIRE          SMALLINT,
    									        COMMENTAIRE            TEXT,
    									        EN_VENTE               BOOL,
    									        PRIMARY KEY (ID_ARTICLE)
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
				$this->connection = new pdo('mysql:host=127.0.0.1:3306;dbname=natural_corner', 'root', '', 
				        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
	 * Recherche dans la base de donnée un utilisateur selon son email.
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
		if($userTrouve){
    		$nbColonnes = $requete->rowCount();
    		if($nbColonnes>0){
        		$ligneBDD = $requete->fetch();
        		$utilisateur = new Utilisateur($ligneBDD["PRENOM"], $ligneBDD["NOM"], $ligneBDD["PSEUDO"], 
        										$ligneBDD["PASS"], $ligneBDD["ADRESSE_MAIL"],
        										$ligneBDD["ADRESSE_PHYSIQUE"], $ligneBDD["CODE_POSTAL"], $ligneBDD["LOCALITE"], 
        										new DateTime("NOW"), $ligneBDD["IP_CONNEXION"]);
        		$requete->closeCursor();
        		return  $utilisateur;
    		}else{
    		    return NULL;
    		}
		}else{
		    return NULL;
		}
	}
	/**
	 * Recherche dans la base de donnée tous les utilisateurs.
	 * @return array Utilisateur  Tous les utilisateurs.
	 */
	public function getAllUsers(){
	    $articlesTrouves=false;
	    $utilisateurs = array();
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" SELECT *
												FROM UTILISATEURS");
	    $articlesTrouves=$requete->execute();
	    if($articlesTrouves){
	        $nbColonnes = $requete->rowCount();
	        if($nbColonnes>0){
        	    $lignesBDD = $requete->fetchAll();
        	    foreach ($lignesBDD as $ligne){
        	        $utilisateur = new Utilisateur($ligne["PRENOM"], $ligne["NOM"], $ligne["PSEUDO"],
        	            $ligne["PASS"], $ligne["ADRESSE_MAIL"],
        	            $ligne["ADRESSE_PHYSIQUE"], $ligne["CODE_POSTAL"], $ligne["LOCALITE"],
        	            new DateTime("NOW"), $ligne["IP_CONNEXION"]);
        	        array_push($utilisateurs, $utilisateur);
        	    }
        	    $requete->closeCursor();
        	    return  $utilisateurs;
	        }else{
	            return NULL;
	        }
	    }else{
	       return NULL;
	    }
	  
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
				':PSEUDO'=>$utilisateur->getPseudo(), 
				':PASS'=>$utilisateur->getPass(), 
				':ADRESSE_MAIL'=>$utilisateur->getAdresseMail(), 
				':ADRESSE_PHYSIQUE'=>$utilisateur->getAdressePhysique(),
				':CODE_POSTAL'=>$utilisateur->getCodePostal(), 
				':LOCALITE'=>$utilisateur->getLocalite(), 
				':DATE_INSCRIPTION'=>$utilisateur->getDateInscription(), 
				':IP_CONNEXION'=>$utilisateur->getIdConnexion()
		));
		try{
		  $utilisateur->setId($this->connection->lastInsertId());
		}catch(UtilisateurException $ue){
		    echo $ue->getMessage();
		}
		$requete->closeCursor();
		return $insertionReussie;
	}
	/**
	 * Retire de la base de donnée un utilisateur.
	 * @param string $email -> l'email de l'utilisateur.
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
	 * @param string $email Email.
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
	 * Vérifie qu'un couple (pseudonyme, mot de passe) est correct pour l'administrateur.
	 *
	 * @param string $email Email.
	 * @param string $password Mot de passe.
	 * @return boolean True si le couple est correct, false sinon.
	 */
	public function checkAdminPassword($email, $password)
	{
	   
        if($email==='admin' AND $password==='admin')
            return true;
        else
            return false;
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
	/**
	 * Recherche dans la base de donnée un rayon selon son emplacement.
	 * @param string  l'emplacement.
	 * @return Rayon  le rayon recherché.
	 */
	public function getRayonParEmplacement($emplacement){
	    $rayonTrouve=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" SELECT *
												FROM RAYONS
												WHERE EMPLACEMENT=:EMPLACEMENT");
	    $rayonTrouve=$requete->execute(array(':EMPLACEMENT'=>$emplacement));
	    if($rayonTrouve){
	        $nbColonnes = $requete->rowCount();
	        if($nbColonnes>0){
        	    $ligneBDD = $requete->fetch();
        	    $rayon = new Rayon($ligneBDD["EMPLACEMENT"]);
        	    $rayon->setId($ligneBDD["ID_RAYON"]);
        	    $requete->closeCursor();
        	    return  $rayon;
	        }else{
	            return NULL;
	        }
	    }else{
	        return NULL;
	    }
	}
	/**
	 * Recherche dans la base de donnée un rayon selon son id.
	 * @param int  id.
	 * @return Rayon  le rayon recherché.
	 */
	public function getRayon($id){
	    $id = (int) $id;
	    $rayonTrouve=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" SELECT *
												FROM RAYONS
												WHERE ID_RAYON=:ID_RAYON");
	    $rayonTrouve=$requete->execute(array(':ID_RAYON'=>$id));
	    if($rayonTrouve){
	        $nbColonnes = $requete->rowCount();
	        if($nbColonnes>0){
        	    $ligneBDD = $requete->fetch();
        	    $rayon = new Rayon($ligneBDD["EMPLACEMENT"]);
        	    $rayon->setId($id);
        	    $requete->closeCursor();
        	    return  $rayon;
    	    }else{
    	        return NULL;
    	    }
	    }else{
	        return NULL;
	    }
	}
	/**
	 * Ajoute dans la base de donnée un rayon.
	 * @param Rayon le rayon à insérer.
	 * @return bool indique si l'insertion est réussie.
	 * @throws RayonException si l'email existe déjà dans la base de données.
	 */
	public function addRayon(Rayon $rayon){
	    $insertionReussie=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" INSERT INTO RAYONS(EMPLACEMENT)
											    VALUES(:EMPLACEMENT)");
	    $insertionReussie = $requete->execute(array(
	            ':EMPLACEMENT'=>$rayon->getEmplacement()
	    ));
	    try{
	        $rayon->setId($this->connection->lastInsertId());
	    }catch(UtilisateurException $ue){
	        echo $ue->getMessage();
	    }
	    $requete->closeCursor();
	    return $insertionReussie;
	}
	/**
	 * Recherche dans la base de donnée un article selon sa dénomination.
	 * @param string  la dénomination.
	 * @return Article  l'article recherché.
	 */
	public function getArticle($denom){
	    $articleTrouve=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" SELECT *
												FROM ARTICLES
												WHERE DENOMINATION=:DENOM");
	    $articleTrouve=$requete->execute(array(':DENOM'=>$denom));
	    if($articleTrouve){
	        $nbColonnes = $requete->rowCount();
	        if($nbColonnes>0){
        	    $ligneBDD = $requete->fetch();
        	    $rayon = $this->getRayon($ligneBDD["ID_RAYON"]);
        	    $article = new Article($ligneBDD["DENOMINATION"], $ligneBDD["PRIX_UNITAIRE"],
        	            $ligneBDD["COMMENTAIRE"],$ligneBDD["EN_VENTE"], $ligneBDD["EN_PROMO"], $rayon);
        	    $requete->closeCursor();
        	    return  $article;
	        }else{
	            return NULL;
	        }
	    }else{
	        return NULL;
	    }
	}
	/**
	 * Ajoute dans la base de donnée un article.
	 * @param Article l'article à insérer.
	 * @return bool indique si l'insertion est réussie.
	 * @throws ArticleException si l'email existe déjà dans la base de données.
	 */
	public function addArticle(Article $article){
        $insertionReussie=false;
        $this->creerConnexion();
        $this->connection->beginTransaction();
        $requete = $this->connection->prepare(" INSERT INTO ARTICLES(
                                                    DENOMINATION, PRIX_UNITAIRE, 
                                                    COMMENTAIRE, EN_VENTE, EN_PROMO, ID_RAYON)
											    VALUES(
                                                    :DENOMINATION, :PRIX_UNITAIRE, 
                                                    :COMMENTAIRE, :EN_VENTE, :EN_PROMO, :ID_RAYON)");
        $insertionReussie = $requete->execute(array(
                ':DENOMINATION'=>$article->getDenomination(),
                ':PRIX_UNITAIRE'=>$article->getPrixUnitaire(),
                ':COMMENTAIRE'=>$article->getCommentaire(),
                ':EN_VENTE'=>$article->isEnVente(),
                ':EN_PROMO'=>$article->isEnPromo(),
                ':ID_RAYON'=>$article->getRayon()->getId()
        ));
        try{
            $article->setId($this->connection->lastInsertId());
        }catch(UtilisateurException $ue){
            echo $ue->getMessage();
        }
        if($insertionReussie)
            $this->connection->commit();
        else 
            $this->connection->rollBack();
        $requete->closeCursor();
        return $insertionReussie;
	}
	/**
	 * Retire de la base de donnée un article.
	 * @param string $denom La dénomination de l'article.
	 * @return boolean indique si le retrait est réussie.
	 */
	public function removeArticle($denom){
	    $estDetruit;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" DELETE FROM ARTICLES
												WHERE DENOMINATION=:DENOMINATION");
	    $estDetruit = $requete->execute(array(
	            ':DENOMINATION'=>$denom
	    ));
	    $requete->closeCursor();
	    return $estDetruit;
	
	}
	/**
	 * Met à jour dans la base de donnée un article.
	 * @param Article $articleMisAJour -> un article avec les nouvelles données.
	 * @param string $denom -> La dénomination de l'article à modifier.
	 * @return boolean indique si la mise à jour est réussie.
	 */
	public function updateArticle(Article $articleMisAJour, $denom){
	    $estMisAJour=false;
        $this->creerConnexion();
        $requete = $this->connection->prepare(" UPDATE ARTICLES
        										SET DENOMINATION=:DENOMINATION, PRIX_UNITAIRE=:PRIX_UNITAIRE, 
                                                    COMMENTAIRE=:COMMENTAIRE,
        											EN_VENTE=:EN_VENTE, EN_PROMO=:EN_PROMO, 
                                                    ID_RAYON=:ID_RAYON
        										WHERE DENOMINATION=:DENOM");
        $estMisAJour = $requete->execute(array(
                ':DENOMINATION'=> $articleMisAJour->getDenomination(),
                ':PRIX_UNITAIRE'=> $articleMisAJour->getPrixUnitaire(),
                ':COMMENTAIRE'=> $articleMisAJour->getCommentaire(),
                ':EN_VENTE'=>$articleMisAJour->isEnVente(),
                ':EN_PROMO'=>$articleMisAJour->isEnVente(),
                ':ID_RAYON'=>$articleMisAJour->getRayon()->getId(),
                ':DENOM'=> $denom
        ));
        $requete->closeCursor();
        return $estMisAJour;
	}
	/**
	 * Recherche dans la base de donnée des articles selon un mot-clé.
	 * @param string  le mot-clé.
	 * @return array  le ou les article(s) recherché(s).
	 */
	public function trouveArticles($denom){
	    $articles = array();
	    $articleTrouve=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" SELECT *
												FROM ARTICLES
												WHERE DENOMINATION LIKE :DENOM");
	    $articleTrouve=$requete->execute(array(':DENOM'=>'%'.$denom.'%'));
	    $ligneBDD = $requete->fetchAll();
	    foreach ($ligneBDD as $ligne){
	       $rayon = $this->getRayon($ligne["ID_RAYON"]);
	       $article =  new Article($ligne["DENOMINATION"], $ligne["PRIX_UNITAIRE"],
	                $ligne["COMMENTAIRE"],$ligne["EN_VENTE"], $ligne["EN_PROMO"], $rayon);
	       array_push($articles, $article);
	    }	    
	    $requete->closeCursor();
	    return  $articles;
	    
	}
	/**
	 * Recherche tous les articles dont le prix est inférieur ou égal au prix indiqué.
	 * @param Integer $prix
	 */
	public function chercherParPrix($prix){
	    $articles = array();
	    $articleTrouve=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" SELECT *
												FROM ARTICLES
												WHERE PRIX_UNITAIRE<=:PRIX");
	    $articleTrouve=$requete->execute(array(':PRIX'=>$prix));
	    if($articleTrouve){
	        $nbColonnes = $requete->rowCount();
	        if($nbColonnes>0){
	            $ligneBDD = $requete->fetchAll();
	            foreach ($ligneBDD as $ligne){
	                $rayon = $this->getRayon($ligne["ID_RAYON"]);
	                $article =  new Article($ligne["DENOMINATION"], $ligne["PRIX_UNITAIRE"],
	                        $ligne["COMMENTAIRE"],$ligne["EN_VENTE"], $ligne["EN_PROMO"], $rayon);
	                array_push($articles, $article);
	            }
	            $requete->closeCursor();
	            return  $articles;
	        }else{
	            $requete->closeCursor();
	            return NULL;
	        }
	    }else{
	        $requete->closeCursor();
	        return NULL;
	    }
	}
	/**
	 * Enregistre le panier courant pour la session de l'utilisateur.
	 * @param Panier $panier
	 * @param int $id
	 */
	public function setPanierCourant(Panier $panier, $id){
	    $this->creerConnexion();
	    $requete = $this->connection->prepare("INSERT INTO PANIERS ");
	    $articleTrouve=$requete->execute(array(':PRIX'=>$prix));
	}
}

?>
