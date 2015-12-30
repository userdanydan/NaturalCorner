<?php

require_once '/Users/ivymike/Documents/workspacePHP/NaturalCorner/exceptions/UtilisateurException.class.php';
require_once '/Users/ivymike/Documents/workspacePHP/NaturalCorner/model/Utilisateur.class.php';
require_once '/Users/ivymike/Documents/workspacePHP/NaturalCorner/model/Database.inc.php';

/**
 * Test class for Utilisateur.
 * Generated by PHPUnit on 2015-12-29 at 19:31:51.
 */
class UtilisateurTest extends PHPUnit_Framework_TestCase
{
	protected $object;
	protected $connection;
	
	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	
	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		unset($this->object);
	}
	
	/**
	 * @covers Utilisateur::setId
	 * @todo Implement testSetId().
	 */
	public function testCreateDatabase()
	{
		$this->object = new Database();
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
}