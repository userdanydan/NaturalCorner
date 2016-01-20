<?php
require_once("vendor/facebook/php-sdk-v4/src/Facebook/autoload.php");


include_once("model/Database.inc.php");
include_once("model/Utilisateur.class.php");

abstract class Action {
	private $view;
	protected $database;
	protected $utilisateurSession;
	/**
	 * Construit une instance de la classe Action.
	 */
	public function __construct(){
		$this->view = null;
		$this->database = new Database();
		
	}
	/**
	 * Fixe la vue qui doit être affichée par le contrôleur.
	 *
	 * @param View $view Vue qui doit être affichée par le contrôleur.
	 */
	protected function setView($view) {
		$this->view = $view;
	}

	/**
	 * Retourne l'utilisateur courant qui doit être affiché par le contrôleur.
	 * 
	 * @return Utilisateur utilisateur qui doit être affiché par le contrôleur.
	 */
	public function getUser() {
		if (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
		} else $user = null;
		return $user;
	}	/**
	 * Fixe l'utilisateur qui doit être affiché par le contrôleur.
	 *
	 * @param Utilisateur $utilisateur Utilisateur qui doit être affiché par le contrôleur.
	 */
	protected function setUser($user) {
		$this->utilisateurSession = $user;
		$_SESSION['user'] = $user;
	}

	
	/**
	 * Retourne la vue qui doit être affichée par le contrôleur.
	 *
	 * @return View Vue qui doit être affichée par le contrôleur.
	 */
	public function getView() {
		return $this->view;
	}
	/**
	 * Récupére la pseudonyme de l'utilisateur s'il est connecté, ou null sinon.
	 *
	 * @return string Pseudonyme de l'utilisateur ou null.
	 */
	public function getSessionLogin() {
		if (isset($_SESSION['login'])) {
			$login = $_SESSION['login'];
		} else $login = null;
		return $login;
	}

	/**
	 * Sauvegarde le pseudonyme de l'utilisateur dans la session.
	 *
	 * @param string $login Pseudonyme de l'utilisateur.
	 */
	protected function setSessionLogin($login) {
		$_SESSION['login'] = $login;
	}

	/**
	 * Fixe la vue de façon à afficher un message à l'utilisateur.
	 * 
	 * @param string $message Message à afficher à l'utilisateur.
	 * @param string $style style de l'affichage.
	 */
	protected function setMessageView($message, $style="") {
		$this->setView(getViewByName("Message"));
		$this->getView()->setMessage($message, $style);
	}

	/**
	 * Méthode qui doit être implémentée par chaque action afin de décrire
	 * son comportement.
	 */
	abstract public function run();
}
?>
