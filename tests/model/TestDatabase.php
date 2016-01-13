<?php

require_once __DIR__.'/../../exceptions/UtilisateurException.class.php';
require_once __DIR__.'/../../model/Utilisateur.class.php';
require_once __DIR__.'/../../model/Database.inc.php';

/**
 * Test class for Utilisateur.
 * Generated by PHPUnit on 2015-12-29 at 19:31:51.
 */
class TestDatabase extends PHPUnit_Framework_TestCase{
	protected $bdd;
	protected $connection;
	protected $utilisateur;
	static $test_increment;
	
	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		self::$test_increment = rand();
		$this->bdd = new Database();
		$this->utilisateur = new Utilisateur("Daniel", "Dan", "DanyDan", 
				password_hash("motdepasse", PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]), 
				"truc".++self::$test_increment."@troc.tr", "rue des petites fleurs 5",
				"1070", "Anderlecht", new DateTime("2015-01-01T00:00:00"), "192.168.0.1");
	}
	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		unset($this->utilisateur);
		unset($this->bdd);
	}
	
	/**
	 * @covers Database::__construct
	 * @covers Database::createDatabase();
	 * @todo Implement testSetId().
	 */
	public function testCreateDatabase()
	{
		// On va vérifier si la base est bien créée et que la commande "SHOW TABLES" retourne bien le nom de la table UTILISATEUR.
		//TODO changer le test pour s'adapter à l'agrandissement de la bdd.
		try{
			$this->connection= new pdo('mysql:host=127.0.0.1:3306;dbname=NATURAL_CORNER_TEST', 'root', '');
		}catch(PDOException $ex){
			echo '<p>'.$ex->getMessage().'</p>';
			die(json_encode(
					array('outcome' => false, 'message' => 'Unable to connect to localhost1')
					)
					);
		}
		try{
			$val;
			$result = $this->connection->query("SHOW TABLES");
			foreach($result as $ligne){
				$val.='---'.$ligne[0].'---';
			}
			$this->assertEquals("---UTILISATEURS---", $val , "doit afficher ---UTILISATEURS---");
							
		}catch(PDOException $ex){
			echo '<p>'.$ex->getMessage().'</p>';
			die(json_encode(
					array('outcome' => false, 'message' => 'Unable to connect to localhost1')
					)
					);
		}
	}
	/**
	 * @depends testCreateDatabase
	 * @covers Database::addUser()
	 */
	public function testAddUser(){
		//teste si le booléen "flag" indique que l'insertion s'est réalisée correctement.
		$insertionReussie = $this->bdd->addUser($this->utilisateur);
		$this->assertTrue($insertionReussie);
	}
	/**
	 * @depends testAddUser
	 * @covers Database::getUser()
	 * @covers Database::addUser()
	 */
	public function testGetUser(){
		$this->bdd->addUser($this->utilisateur);
		$utilisateurRecupere = $this->bdd->getUser($this->utilisateur->getAdresseMail());
		//Il serait bien que l'objet récupéré soit du type utilisateur.
		$this->assertTrue($utilisateurRecupere instanceOf Utilisateur);
		//et vérifie par la même occasion que la méthode addUser() fonctionne.
		$this->assertEquals($this->utilisateur->getPrenom(), $utilisateurRecupere->getPrenom(), "aurait dû afficher Daniel");		
	}
	/**
	 * @depends testGetUser
	 * @depends testAddUser
	 * @covers Database::getUser()
	 * @covers Database::addUser()
	 * @covers Database::removeUser()
	 */
	public function testRemoveUser(){
		$utilisateurDeplace = $this->bdd->removeUser("truc@troc.tr");
		//une fois retirés de la base de données, les résultats de getUser->getNom() doivent être null.
		$this->assertNull($this->bdd->getUser("truc".++self::$test_increment."@troc.tr")->getNom());
		$this->assertNull($this->bdd->getUser("truc".++self::$test_increment."@troc.tr")->getPrenom());
		$this->assertNull($this->bdd->getUser("truc".++self::$test_increment."@troc.tr")->getPseudo());
		//booléen "flag" nous mettant au courant que l'opération "remove" a bien fonctionné. 
		$this->assertTrue($utilisateurDeplace);
		
		
		// Testons encore les trois méthodes add, remove et get. 
		//L'ajout des dépendances en commentaire de la méthode nous assure que les tests se déroulent dans le bon ordre.
		$utilisateur1 = new Utilisateur("prenom1", "nom1", "pseudo1", 
				password_hash("motdepasse1", PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]), "truc".++self::$test_increment."@troc.tr", 
				"rue des petites fleurs 5",
				"1040", "Etterbeek", new DateTime("2015-01-01T00:00:00"), "192.168.0.1");
		$insertionUtilisateur1 = $this->bdd->addUser($utilisateur1);
		
		$utilisateur2 = new Utilisateur("prenom2", "nom2", "pseudo2", 
				password_hash("motdepasse2", PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]), "truc".++self::$test_increment."@troc.tr", 
				"rue des petites fleurs 5",
				"1040", "Anderlecht", new DateTime("2015-01-01T00:00:00"), "192.168.0.1");
		$insertionUtilisateur2 =$this->bdd->addUser($utilisateur2);
		
		$utilisateur3 = new Utilisateur("prenom3", "nom3", "pseudo3", 
				password_hash("motdepasse3", PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]), "truc".++self::$test_increment."@troc.tr", 
				"rue des petites fleurs 5",
				"1040", "Anderlecht", new DateTime("2015-01-01T00:00:00"), "192.168.0.1");
		$insertionUtilisateur3 =$this->bdd->addUser($utilisateur3);
		
		//utilisateur1
		
		$this->assertTrue($insertionUtilisateur1);
		$utilisateurBDD1 = $this->bdd->getUser($utilisateur1->getAdresseMail());
		$this->assertTrue($utilisateurBDD1 instanceOf Utilisateur);
		$this->assertEquals($utilisateur1->getPrenom(), $utilisateurBDD1->getPrenom(), "aurait dû afficher prenom1");
		$this->assertEquals($utilisateur1->getNom(), $utilisateurBDD1->getNom(), "aurait dû afficher nom1");		
		$this->assertEquals($utilisateur1->getPseudo(), $utilisateurBDD1->getPseudo(), "aurait dû afficher pseudo1");
		
		//utilisateur2
		
		$this->assertTrue($insertionUtilisateur2);
		$utilisateurBBD2 = $this->bdd->getUser($utilisateur2->getAdresseMail());
		$this->assertTrue($utilisateurBBD2 instanceOf Utilisateur);
		$this->assertEquals($utilisateur2->getPrenom(), $utilisateurBBD2->getPrenom(), "aurait dû afficher prenom2");
		$this->assertEquals($utilisateur2->getNom(), $utilisateurBBD2->getNom(), "aurait dû afficher nom2");
		$this->assertEquals($utilisateur2->getPseudo(), $utilisateurBBD2->getPseudo(), "aurait dû afficher pseudo2");
		
		//utilisateur3
		
		$this->assertTrue($insertionUtilisateur3);
		$utilisateurBBD3 = $this->bdd->getUser($utilisateur3->getAdresseMail());
		$this->assertTrue($utilisateurBBD3 instanceOf Utilisateur);
		$this->assertEquals($utilisateur3->getPrenom(), $utilisateurBBD3->getPrenom(), "aurait dû afficher prenom3");
		$this->assertEquals($utilisateur3->getNom(), $utilisateurBBD3->getNom(), "aurait dû afficher nom3");
		$this->assertEquals($utilisateur3->getPseudo(), $utilisateurBBD3->getPseudo(), "aurait dû afficher pseudo3");
		
		
		// test de removeUser()
		$utilisateurRetire1 = $this->bdd->removeUser($utilisateur1->getAdresseMail());
		$this->assertTrue($utilisateurRetire1);
		
		$this->assertNull($this->bdd->getUser($utilisateur1->getAdresseMail())->getNom());
		$this->assertNull($this->bdd->getUser($utilisateur1->getAdresseMail())->getPrenom());
		$this->assertNull($this->bdd->getUser($utilisateur1->getAdresseMail())->getPseudo());
		
		$utilisateurRetire2 = $this->bdd->removeUser($utilisateur2->getAdresseMail());
		$this->assertTrue($utilisateurRetire2);
		
		$this->assertNull($this->bdd->getUser($utilisateur2->getAdresseMail())->getNom());
		$this->assertNull($this->bdd->getUser($utilisateur2->getAdresseMail())->getPrenom());
		$this->assertNull($this->bdd->getUser($utilisateur2->getAdresseMail())->getPseudo());
				
		$utilisateurRetire3 = $this->bdd->removeUser($utilisateur3->getAdresseMail());
		$this->assertTrue($utilisateurRetire3);
		
		$this->assertNull($this->bdd->getUser($utilisateur3->getAdresseMail())->getNom());
		$this->assertNull($this->bdd->getUser($utilisateur3->getAdresseMail())->getPrenom());
		$this->assertNull($this->bdd->getUser($utilisateur3->getAdresseMail())->getPseudo());
		
	}
	/**
	 * @depends testCreateDatabase
	 * @covers Database::getUser()
	 * @covers Database::addUser()
	 */
	public function testUpdateUser(){
		//j'ajoute  l'utilisateur standard des tests.
		$this->bdd->addUser($this->utilisateur);
		//vérification
		$this->assertEquals(
				$this->utilisateur->getPrenom(), 
				$this->bdd->getUser($this->utilisateur->getAdresseMail())->getPrenom()
		);
		//modification du pseudo 
		$this->utilisateur->setPseudo("nouveauPseudo1");
		$this->bdd->updateUser($this->utilisateur, $this->utilisateur->getAdresseMail());
		
		$this->assertEquals(
				"nouveauPseudo1",
				$this->bdd->getUser($this->utilisateur->getAdresseMail())->getPseudo(),
				"Aurait dû afficher nouveauPseudo");

		
		//je change uniquement le mot de passe.
		try{
			$this->utilisateur->setPass(password_hash("nomduchat", PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]));
		}catch(UtilisateurException $ue){
			echo '<p>'.$ue->getMessage().'</p>';
		}
				
		$this->bdd->updateUser($this->utilisateur, $this->utilisateur->getAdresseMail());
		// L'utilisateur reçoit un nouveau mot de passe. 
		//Voyons si le hash correspond à celui de la base de données.
		$utilisateurUpdate = $this->bdd->getUser($this->utilisateur->getAdresseMail());
		$this->assertTrue(password_verify("nomduchat", $utilisateurUpdate->getPass()));

	}
	/**
	 * @depends testCreateDatabase
	 * @covers Database::addUser()
	 */
	public function testCheckPassword(){
		$email = "truc".++self::$test_increment."@troc.tr";
		$utilisateur1 = new Utilisateur("dada", "dudu", "pseudoTest",
				password_hash("pwdTest", PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]),
				$email, "rue des petites fleurs 5",
				"1070", "Anderlecht", new DateTime("2015-01-01T00:00:00"), "192.168.0.1");
		$this->bdd->addUser($utilisateur1);
		$this->assertFalse($this->bdd->checkPassword("mauvaistest@email.com", "pwdTest"));
		$this->assertFalse($this->bdd->checkPassword($email, "mauvaisPwdtest"));
		
		$this->assertTrue($this->bdd->checkPassword($email, "pwdTest"));
		
	}
}