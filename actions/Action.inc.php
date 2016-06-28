<?php
require_once(__DIR__."/../vendor/facebook/php-sdk-v4/src/Facebook/autoload.php");


include_once(__DIR__."/../model/Database.inc.php");
include_once(__DIR__."/../model/Utilisateur.class.php");

abstract class Action {
	private $view;
	protected $database;
	protected $utilisateurSession;
	protected $panier;
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
			$this->utilisateurSession = $_SESSION['user'];
		} else 
		    $this->utilisateurSession = null;
		return $this->utilisateurSession;
	}	
	/**
	 * Fixe l'utilisateur qui doit être affiché par le contrôleur.
	 *
	 * @param Utilisateur $utilisateur Utilisateur qui doit être affiché par le contrôleur.
	 */
	protected function setUser($user) {
		$this->utilisateurSession = $user;
		$_SESSION['user'] = $user;
	}
	/**
	 * Retourne le panier courant qui doit être affiché par le contrôleur.
	 *
	 * @return Panier panier qui doit être affiché par le contrôleur.
	 */
	public function getPanier() {
	    if (isset($_SESSION['panier'])) {
	        $this->panier = $_SESSION['panier'];
	    } else 
	        $this->panier = null;
	    return $this->panier;
	}	
	/**
	* Fixe le panier qui doit être affiché par le contrôleur.
	*
	* @param Panier $panier Panier qui doit être affiché par le contrôleur.
	*/
	protected function setPanier($panier) {
	    $this->panier = $panier;
	    $_SESSION['panier'] = $panier;
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
		if($login===null){
			session_destroy();
		}
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
