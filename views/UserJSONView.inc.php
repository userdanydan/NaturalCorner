<?php

class UserJSONView {

	protected $message = "";
	protected $style = "";
	protected $login = null;
	protected $user=null;
	/**
	 * Génère la page à afficher au client.
	 */
	public function run() {
		
	}
	/**
	 * Fixe l'utilisateur qui doit être affiché par la vue.
	 *
	 * @param Utilisateur $user Utilisateur à afficher.
	 */
	public function setUser(Utilisateur $user) {
		$this->user = $user;
	}
	/**
	 * Fixe le message qui doit être affichée par la vue.
	 *
	 * @param string $message Message à afficher.
	 * @param string $style Style du message à afficher.
	 */
	public function setMessage($message, $style="") {
		$this->message = $message;
		$this->style = $style;	
	}
	
	/**
	 * Fixe le login de l'utilisateur (s'il est connecté).
	 *
	 * @param string $login Login de l'utilisateur.
	 */
	public function setLogin($login) {
		$this->login = $login;	
	}	
	/**
	 * Génère le header.
	 */
	private function displayHeader() {
		include("views/templates/header.inc.php");
	}
	/**
	 * Génère le formulaire de connexion.
	 */
	private function displayLoginForm() {
		include("views/templates/loginform.inc.php");
	}

	/**
	 * Génère le formulaire de déconnexion.
	 */
	private function displayLogoutForm() {
		include("views/templates/logoutform.inc.php");
	}

	/**
	 * Génère une liste de commandes proposées à un utilisateur authentifié.
	 */
	private function displayCommands() {
		include("views/templates/commands.inc.php");
	}

}