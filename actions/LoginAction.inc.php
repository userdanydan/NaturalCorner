<?php
include_once("actions/Action.inc.php");
class LoginAction extends Action 
{

	/**
	 * Traite les données envoyées par le visiteur via le formulaire de connexion
	 * (variables $_POST['email'] et $_POST['password']).
	 * Le mot de passe est vérifié en utilisant les méthodes de la classe Database.
	 * Si le mot de passe n'est pas correct, on affiche le message "Pseudo ou mot de passe incorrect."
	 * Si la vérification est réussie, le pseudo est affecté à la variable de session.
	 *
	 * @see Action::run()
	 */
	public function run() 
	{
		if(isset($_POST['email']) && isset($_POST['password'])){
			if(!empty($_POST['email']) && !empty($_POST['password']))
			{
				if($this->database->checkPassword($_POST['email'], $_POST['password']))
				{
					$this->setUser($this->database->getUser($_POST['email']));				
					if($this->utilisateurSession->getPseudo()!=null){
						$this->setSessionLogin($this->getUser()->getPseudo());
					}elseif($this->getUser()->getNom()!=null && $this->getUser()->getPrenom()!=null){
						$this->setSessionLogin($this->getUser()->getPrenom()." ".$this->getUser()->getNom());
					}else{
						$this->setSessionLogin($this->getUser()->getAdresseMail());
					}
					$this->setView(getViewByName("Accueil"));
					//$this->getView()->setMessage("Login réussi!", "alert-success");
						
				}
				else
				{
					$this->setView(getViewByName("Message"));
					$this->getView()->setMessage("Pseudo ou mot de passe incorrect.", "alert-danger");
				}
			}
			else
			{
				$this->setView(getViewByName("Message"));
				$this->getView()->setMessage("Pseudo ou mot de passe incorrect.", "alert-danger");
			}
		}
	}
}
?>