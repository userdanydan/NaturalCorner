<?php

include_once("actions/Action.inc.php");

class UpdateUserAction extends Action 
{
	/**
	 * Met à jour le mot de passe de l'utilisateur en procédant de la façon suivante :
	 *
	 * Si toutes les données du formulaire de modification de profil ont été postées
	 * ($_POST['updatePassword'] et $_POST['updatePassword2']), on vérifie que
	 * le mot de passe et la confirmation sont identiques.
	 * S'ils le sont, on modifie le compte avec les méthodes de la classe 'Database'.
	 *
	 * Si une erreur se produit, le formulaire de modification de mot de passe
	 * est affiché à nouveau avec un message d'erreur.
	 *
	 * Si aucune erreur n'est détectée, le message 'Modification enregistrée.'
	 * est affiché à l'utilisateur.
	 *
	 * @see Action::run()
	 */
	public function run() 
	{
		
		if(isset($_POST['submit'])){
			$emailID=$this->getUser()->getAdresseMail();
			$filters = array(
					'email' => array(
							'filter' => FILTER_SANITIZE_EMAIL | FILTER_SANITIZE_MAGIC_QUOTES,
							'flags' => FILTER_NULL_ON_FAILURE ,
					),
					'pwd' => array(
							'filter' => FILTER_VALIDATE_REGEXP,
							'flags' => FILTER_NULL_ON_FAILURE,
							'options' => array('regexp'=>'/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/')
					),
					'pwd2' => array(
							'filter' => FILTER_VALIDATE_REGEXP,
							'flags' => FILTER_NULL_ON_FAILURE,
							'options' => array('regexp'=>'/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/')
					),
					'prenom' => array(
							'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
							'flags' => FILTER_NULL_ON_FAILURE ,
							'options' => array('regexp'=>'/^[0-9a-zA-Z]{3,128}$/')
					),
					'nom' => array(
							'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
							'flags' => FILTER_NULL_ON_FAILURE,
							'options' => array('regexp'=>'/^[0-9a-zA-Z]{3,128}$/')
					),
					'pseudo' => array(
							'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
							'flags' => FILTER_NULL_ON_FAILURE ,
							'options' => array('regexp'=>'/^[0-9a-zA-Z]{3,128}$/')
					),
					'adresse' => array(
							'filter' =>FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
							'flags' => FILTER_NULL_ON_FAILURE
					),
					'poste' => array(
							'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
							'flags' => FILTER_NULL_ON_FAILURE ,
							'options' => array('regexp'=>'/^[0-9]{4,5}$/')
					),
					'localite' => array(
							'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
							'flags' => FILTER_NULL_ON_FAILURE,
							'options' => array('regexp'=>'/^[0-9a-zA-Z]{1,128}$/')
					)
			);
			$form_data = filter_input_array(INPUT_POST, $filters);
			$updateMessage='';
			$estModifie=false;
			if($form_data['pwd']!==null){
				if($form_data['pwd']===$form_data['pwd2']){			
					$this->getUser()->setPass(password_hash($form_data['pwd'], PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]));
				}else{
					$this->setUpdateUserFormView("Le mot de passe n'a pas été convenablement confirmé.");
					return;
				}
			}
			if($form_data['nom']!==null){
				try{
					$this->getUser()->setNom($form_data['nom']);
				}catch(UtilisateurException $ue){
					$updateMessage.=$ue->getMessage().'<br>';
				}
			}
			if($form_data['prenom']!==null){
				try{
					$this->getUser()->setPrenom($form_data['prenom']);
				}catch(UtilisateurException $ue){
					$updateMessage.=$ue->getMessage().'<br>';
				}
			}
			if($form_data['pseudo']!==null){
				try{
					$this->getUser()->setPseudo($form_data['pseudo']);
				}catch(UtilisateurException $ue){
					$updateMessage.=$ue->getMessage().'<br>';
				}
			}
			if($form_data['adresse']!==null){
				try{
					$this->getUser()->setAdressePhysique($form_data['adresse']);
				}catch(UtilisateurException $ue){
					$updateMessage.=$ue->getMessage().'<br>';
				}
			}
			if($form_data['localite']!==null){
				try{
					$this->getUser()->setLocalite($form_data['localite']);
				}catch(UtilisateurException $ue){
					$updateMessage.=$ue->getMessage().'<br>';
				}
			}
			if($form_data['poste']!==null){
				try{
					$this->getUser()->setCodePostal($form_data['poste']);
				}catch(UtilisateurException $ue){
					$updateMessage.=$ue->getMessage().'<br>';
				}
			}
			if($form_data['email']!==null){
				try{
					$this->getUser()->setAdresseMail($form_data['email']);
				}catch(UtilisateurException $ue){
					$updateMessage.=$ue->getMessage().'<br>';
				}
			}
			if($updateMessage===''){
				try{
					$estModifie = $this->database->updateUser($this->getUser(), $emailID);
				}catch(EmailAlreadyTakenException $e){
					$updateMessage.=$e->getMessage().'<br>';
				}
			}
			if($estModifie){
				$this->setSessionLogin($this->getUser()->getPseudo());				
				$this->setMessageView("Modification(s) enregistrée(s).", "alert-success");
			}else{ 
				$this->setMessageView("Modification non enregistrée.<br>".$updateMessage, "alert-danger");
			}	
		}else{ 
			$this->setView(getViewByName("UpdateUser"));
			$this->getView()->setUser($this->getUser());
			
		}
	}

	private function setUpdateUserFormView($message) 
	{
		$this->setMessageView($message, "alert-danger");
		
// 		$this->setView(getViewByName("UpdateUser"));
// 		$this->getView()->setUser($this->getUser());
// 		$this->getView()->setMessage($message, "alert-error");
	}

}

?>
