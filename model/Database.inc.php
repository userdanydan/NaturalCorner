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
			
			$this->connection->beginTransaction();
			$succes = $this->connection->query("CREATE TABLE UTILISATEURS(
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
                                                        IP_CONNEXION     Varchar (128) ,
                                                        PRIMARY KEY (ID_UTILISATEUR ) ,
                                                        UNIQUE (ADRESSE_MAIL )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE COMMANDES(
                                                        ID_COMMANDE    int (11) Auto_increment  NOT NULL ,
                                                        DATE_COMMANDE  Datetime ,
                                                        ID_UTILISATEUR Int NOT NULL ,
                                                        ID_PANIER      Int NOT NULL ,
                                                        PRIMARY KEY (ID_COMMANDE )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE ARTICLES(
                                                        ID_ARTICLE    int (11) Auto_increment  NOT NULL ,
                                                        DENOMINATION  Varchar (128) ,
                                                        PRIX_UNITAIRE int  ,
                                                        COMMENTAIRE   Longtext ,
                                                        EN_VENTE      Bool ,
                                                        EN_PROMO      Bool ,
                                                        ID_RAYON      Int NOT NULL ,
                                                        PRIMARY KEY (ID_ARTICLE ) ,
                                                        UNIQUE (DENOMINATION )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE VENDEURS(
                                                        ID_VENDEUR     int (11) Auto_increment  NOT NULL ,
                                                        ID_UTILISATEUR Int NOT NULL ,
                                                        PRIMARY KEY (ID_VENDEUR ,ID_UTILISATEUR )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE GERANTS(
                                                        ID_GERANT      int (11) Auto_increment  NOT NULL ,
                                                        ID_VENDEUR     Int NOT NULL ,
                                                        ID_UTILISATEUR Int NOT NULL ,
                                                        PRIMARY KEY (ID_GERANT ,ID_VENDEUR ,ID_UTILISATEUR )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE IMAGES(
                                                        ID_IMAGE    int (11) Auto_increment  NOT NULL ,
                                                        TITRE       Varchar (128) ,
                                                        TAILLE      Varchar (50) ,
                                                        TYPE        Varchar (25) ,
                                                        DESCRIPTION Varchar (128) ,
                                                        IMAGE_BLOB  Blob ,
                                                        ID_ARTICLE  Int NOT NULL ,
                                                        PRIMARY KEY (ID_IMAGE ) ,
                                                        UNIQUE (TITRE )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE PANIERS(
                                                        ID_PANIER   int (11) Auto_increment  NOT NULL ,
                                                        PRIMARY KEY (ID_PANIER )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE LIGNES_PANIER(
                                                        ID_LIGNE_PANIER int (11) Auto_increment  NOT NULL ,
                                                        QUANTITE        Int ,
                                                        ID_PANIER       Int NOT NULL ,
                                                        ID_ARTICLE      Int NOT NULL ,
                                                        PRIMARY KEY (ID_LIGNE_PANIER )
                                                )ENGINE=InnoDB; ");
			$succes = $this->connection->query("CREATE TABLE RAYONS(
                                                        ID_RAYON    int (11) Auto_increment  NOT NULL ,
                                                        EMPLACEMENT Varchar (128) ,
                                                        PRIMARY KEY (ID_RAYON ) ,
                                                        UNIQUE (EMPLACEMENT )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE CATEGORIES(
                                                        ID_CATEGORIE   int (11) Auto_increment  NOT NULL ,
                                                        CATEGORIE      Varchar (128) ,
                                                        ID_CATEGORIE_1 Int NOT NULL ,
                                                        PRIMARY KEY (ID_CATEGORIE ) ,
                                                        UNIQUE (CATEGORIE )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("CREATE TABLE CARACTERISER(
                                                        ID_ARTICLE   Int NOT NULL ,
                                                        ID_CATEGORIE Int NOT NULL ,
                                                        PRIMARY KEY (ID_ARTICLE ,ID_CATEGORIE )
                                                )ENGINE=InnoDB;");
			$succes = $this->connection->query("ALTER TABLE COMMANDES ADD CONSTRAINT FK_COMMANDES_ID_UTILISATEUR FOREIGN KEY (ID_UTILISATEUR) REFERENCES UTILISATEURS(ID_UTILISATEUR);
                                                ALTER TABLE COMMANDES ADD CONSTRAINT FK_COMMANDES_ID_PANIER FOREIGN KEY (ID_PANIER) REFERENCES PANIERS(ID_PANIER);
                                                ALTER TABLE ARTICLES ADD CONSTRAINT FK_ARTICLES_ID_RAYON FOREIGN KEY (ID_RAYON) REFERENCES RAYONS(ID_RAYON);
                                                ALTER TABLE VENDEURS ADD CONSTRAINT FK_VENDEURS_ID_UTILISATEUR FOREIGN KEY (ID_UTILISATEUR) REFERENCES UTILISATEURS(ID_UTILISATEUR);
                                                ALTER TABLE GERANTS ADD CONSTRAINT FK_GERANTS_ID_VENDEUR FOREIGN KEY (ID_VENDEUR) REFERENCES VENDEURS(ID_VENDEUR);
                                                ALTER TABLE GERANTS ADD CONSTRAINT FK_GERANTS_ID_UTILISATEUR FOREIGN KEY (ID_UTILISATEUR) REFERENCES UTILISATEURS(ID_UTILISATEUR);
                                                ALTER TABLE IMAGES ADD CONSTRAINT FK_IMAGES_ID_ARTICLE FOREIGN KEY (ID_ARTICLE) REFERENCES ARTICLES(ID_ARTICLE);
                                                ALTER TABLE PANIERS ADD CONSTRAINT FK_PANIERS_ID_COMMANDE FOREIGN KEY (ID_COMMANDE) REFERENCES COMMANDES(ID_COMMANDE);
                                                ALTER TABLE LIGNES_PANIER ADD CONSTRAINT FK_LIGNES_PANIER_ID_PANIER FOREIGN KEY (ID_PANIER) REFERENCES PANIERS(ID_PANIER);
                                                ALTER TABLE LIGNES_PANIER ADD CONSTRAINT FK_LIGNES_PANIER_ID_ARTICLE FOREIGN KEY (ID_ARTICLE) REFERENCES ARTICLES(ID_ARTICLE);
                                                ALTER TABLE CATEGORIES ADD CONSTRAINT FK_CATEGORIES_ID_CATEGORIE_1 FOREIGN KEY (ID_CATEGORIE_1) REFERENCES CATEGORIES(ID_CATEGORIE);
                                                ALTER TABLE CARACTERISER ADD CONSTRAINT FK_CARACTERISER_ID_ARTICLE FOREIGN KEY (ID_ARTICLE) REFERENCES ARTICLES(ID_ARTICLE);
                                                ALTER TABLE CARACTERISER ADD CONSTRAINT FK_CARACTERISER_ID_CATEGORIE FOREIGN KEY (ID_CATEGORIE) REFERENCES CATEGORIES(ID_");
			$succes = $this->connection->query("insert into rayons values(1, 'porte 1');");
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
        		$utilisateur->setId($ligneBDD["ID_UTILISATEUR"]);
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
        	        $utilisateur->setId($ligneBDD["ID_UTILISATEUR"]);
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
		//TODO Changer lastInsertID()
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
        	    $article->setId($ligneBDD["ID_ARTICLE"]);
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
	       $article->setId($ligneBDD["ID_ARTICLE"]);
	       
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
	                $article->setId($ligneBDD["ID_ARTICLE"]);
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
	 * Enregistre le panier courant pour la commande de l'utilisateur.
	 * @param Panier $panier
	 * @param int $id
	 * @return bool $insertionOK si l'insertion du panier en BDD est réussie.
	 */
	public function setPanierCourant(Panier $panier, Utilisateur $utilisateur){
	    $insertionOK=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare("INSERT INTO PANIERS VALUES()");    	    	
	    $insertionOK = $requete->execute();
	    try{
	       $panier->setId($this->connection->lastInsertId());
	    }catch(PanierException $pe){
	        $insertionOK=false;
	    }
	    $idPanier = $panier->getId();
	    for($i=0; $i<$panier->getNbLignes(); $i++){
            $idArticleDeLaLigne = $this->getArticle($panier->getLignePanier($i)->getArticle()->getDenomination())->getId();
            $quantiteDeLArticleDeLaLigne = $panier->getLignePanier($i)->getQuantite();
            $requete = $this->connection->prepare("INSERT INTO LIGNES_PANIER(QUANTITE, ID_PANIER, ID_ARTICLE)
                                                   VALUES(:QUANTITE, :ID_PANIER, :ID_ARTICLE)");
            $insertionOK = $requete->execute(array( 'QUANTITE'=>$quantiteDeLArticleDeLaLigne,
                            	                    'ID_PANIER'=>$idPanier,
                            	                    'ID_ARTICLE'=>$idArticleDeLaLigne));
	    }
	    $requete = $this->connection->prepare("INSERT INTO COMMANDES (DATE_COMMANDE, ID_UTILISATEUR, ID_PANIER)
	                                           VALUES(:DATE_COMMANDE, :ID_UTILISATEUR, :ID_PANIER)");
	    $insertionOK = $requete->execute(array( 'DATE_COMMANDE'=>date('Y-m-d', strtotime('+3 days')),
                                	            'ID_UTILISATEUR'=>$utilisateur->getId(),
                                	            'ID_PANIER'=>$idPanier));
	    return $insertionOK;
	}
	/**
	 * Recherche dans la base de données toutes les commandes.
	 * @return array  Les commandes.
	 */
	public function trouveCommandes(){
	    $commandes = array();
	    $commandesTrouvees=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" SELECT *
												FROM COMMANDES C INNER JOIN UTILISATEURS U 
	                                               ON C.ID_UTILISATEUR=U.ID_UTILISATEUR
	                                                         INNER JOIN PANIERS P 
	                                               ON C.ID_PANIER=P.ID_PANIER ");
	    $commandesTrouvees=$requete->execute();
	    $ligneBDD = $requete->fetchAll();
	    foreach ($ligneBDD as $ligne){
	        $utilisateur = new Utilisateur($ligne["PRENOM"], $ligne["NOM"], $ligne["PSEUDO"], 
        										$ligne["PASS"], $ligne["ADRESSE_MAIL"],
        										$ligne["ADRESSE_PHYSIQUE"], $ligne["CODE_POSTAL"], $ligne["LOCALITE"], 
        										new DateTime("NOW"), $ligne["IP_CONNEXION"]);
        	$utilisateur->setId($ligne["ID_UTILISATEUR"]);
            $panier = $this->trouvePanier($ligne["ID_PANIER"]);
            $panier->setId($ligne["ID_PANIER"]);
	        $commande =  new Commande($ligne["DATE_COMMANDE"], $utilisateur, $panier);
	        $commande->setId($ligne["ID_COMMANDE"]);	
	        array_push($commandes, $commande);
	    }
	    $requete->closeCursor();
	    return  $commandes;	     
	}
	/**
	 * Recherche dans la base de données les lignes de paniers associées à un panier.
	 * @param int $idPanier l'identifiant du panier.
	 * @return Panier Le panier.
	 */
	public function trouvePanier($idPanier){
	    $panier = new Panier();
	    $panier->setId($idPanier);
	    $lignesTrouvees=false;
	    $this->creerConnexion();
	    $requete = $this->connection->prepare(" SELECT QUANTITE, DENOMINATION
												FROM LIGNES_PANIER LP 
	                                               INNER JOIN ARTICLES A ON LP.ID_ARTICLE=A.ID_ARTICLE
	                                               INNER JOIN RAYONS R ON A.ID_RAYON=R.ID_RAYON
	                                            WHERE ID_PANIER=:ID_PANIER");
	    $lignesTrouvees=$requete->execute(array( 'ID_PANIER'=> $idPanier));
	    $ligneBDD = $requete->fetchAll();
	    $i=0;
	    foreach ($ligneBDD as $ligne){
	        $lignePanier = new LignePanier($this->getArticle($ligne["DENOMINATION"]), $ligne["QUANTITE"]);
	        $lignePanier->setId($i++);
	        $panier->ajouterLigne($lignePanier);
	    }
	    $requete->closeCursor();
	    return  $panier;
	}
}

?>
