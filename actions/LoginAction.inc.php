<?php
include_once("actions/Action.inc.php");
class LoginAction extends Action 
{

	/**
	 * Traite les données envoyées par le visiteur via le formulaire de connexion
	 * (variables $_POST['nickname'] et $_POST['password']).
	 * Le mot de passe est vérifié en utilisant les méthodes de la classe Database.
	 * Si le mot de passe n'est pas correct, on affiche le message "Pseudo ou mot de passe incorrect."
	 * Si la vérification est réussie, le pseudo est affecté à la variable de session.
	 *
	 * @see Action::run()
	 */
	public function run() 
	{
		if(isset($_POST['nickname']) && isset($_POST['password']))
		{
			if(!empty($_POST['nickname']) && !empty($_POST['password']))
			{
				if($this->database->checkPassword($_POST['nickname'], $_POST['password']))
				{
					$this->setSessionLogin($_POST['nickname']);
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