<?php
include_once(__DIR__."/../controlers/CtrlCompte.class.php");

class EnregistrementAction extends Action 
{
    use CtrlCompte;
	/**
	 * Controleur qui introduit un nouvel utilisateur dans la bdd.
	 * @see Action::run()
	 */
	public function run() 
	{			
		$form_data = $this->verifierInput();
		$insertionMessage='';
		$estInsere=false;
		if( $form_data['email']!=null and $form_data['pwd']!=null and $form_data['pwd2']!=null){
			if($form_data['pwd']===$form_data['pwd2']){
			    $estInsere = $this->ajouterUtilisateur($form_data, $insertionMessage);
				if($estInsere){
				    $utilisateur = $this->database->getUser($form_data['email']);
					$this->setSessionLogin($utilisateur->getPseudo());
					$this->setUser($utilisateur);
					if($this->utilisateurSession->getPseudo()!=null){
						$this->setSessionLogin($this->getUser()->getPseudo());
					}elseif($this->getUser()->getNom()!=null && $this->getUser()->getPrenom()!=null){
						$this->setSessionLogin($this->getUser()->getPrenom()." ".$this->getUser()->getNom());
					}else{
						$this->setSessionLogin($this->getUser()->getAdresseMail());
					}
					$this->setView(getViewByName('Accueil'));				
					$this->setMessageView("L'inscription est réussie.", "alert-success");				
	
				}else{
					$this->setView(getViewByName("Default"));
					$this->setMessageView("L'inscription n'a pas réussi : ".$insertionMessage , "alert-danger");
				}
			}else{
				$this->setView(getViewByName("Default"));
				$this->setMessageView("L'inscription n'a pas réussi car vos mots de passe ne sont pas identiques.", "alert-danger");
			}
		}else{
			$this->setView(getViewByName("Default"));
			$this->setMessageView("Veuillez introduire une adresse email et un mot de passe.", "alert-danger");			
		}
	}
}
?>