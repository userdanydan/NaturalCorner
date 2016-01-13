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
		//filtrage des données avec la méthode filter_input.
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
				),'poste' => array(
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
		$estInsere=false;
		if( $form_data['email']!=null and $form_data['pwd']!=null ){
			$utilisateur = new Utilisateur($form_data['prenom'], $form_data['nom'], $form_data['pseudo'], 
					password_hash($form_data['pwd'], PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]),
					$form_data['email'], $form_data['adresse'], $form_data['poste'], 
					$form_data['localite'], new DateTime('NOW'), $_SERVER['REMOTE_ADDR']);
			$estInsere = $this->database->addUser($utilisateur);
			$this->setView(getViewByName("Enregistrement"));
			if($estInsere){
				$this->setMessageView("L'inscription est réussie.", "alert-succes");				
				$this->setView(getViewByName('Accueil'));
			}else{
				$this->setMessageView("L'inscription n'a pas réussi.", "alert-danger");
			}
		}else{
			$this->setMessageView("Veuillez introduire une adresse email et un mot de passe.", "alert-danger");
			
		}
	}
}
?>