<?php
include_once("actions/Action.inc.php");
class EnregistrementAction extends Action 
{

	/**
	 *Controleur qui introduit un nouvel utilisateur dans la bdd.
	 * @see Action::run()
	 */
	public function run() 
	{
		
		if(isset($_POST['email'])){
			$utilisateur = new Utilisateur($_POST['prenom'], $_POST['nom'], $_POST['pseudo'], 
					$_POST['pwd'], $_POST['email'], $_POST['adresse'], $_POST['poste'], 
					$_POST['localite'], new DateTime('NOW'), $_SERVER['REMOTE_ADDR']);
			$estInsere = $this->database->addUser($utilisateur);
			$this->setView(getViewByName("Enregistrement"));
			if($estInsere){
				$this->setMessageView("L'inscription est réussie.");				
				$this->setView(getViewByName('Default'));
			}else{
				$this->setMessageView("L'inscription n'a pas réussie.");
			}
		}
	}
}
?>