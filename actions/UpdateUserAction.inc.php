<?php

include_once("actions/Action.inc.php");
include_once("controlers/CtrlCompte.class.php");

class UpdateUserAction extends Action 
{
    use CtrlCompte;
	/**
	 * @see Action::run()
	 */
	public function run() 
	{		
		if(isset($_POST['submit'])){
			$emailID=$this->getUser()->getAdresseMail();
			$form_data = $this->verifierInput();
			$updateMessage='';
			$estModifie=false;
			$estModifie=$this->modifierUtilisateur($form_data, $updateMessage);
			if($estModifie){
				$this->setSessionLogin($this->getUser()->getPseudo());				
				$this->setMessageView("Modification(s) enregistrée(s).", "alert-success");
			}else{ 
				$this->setMessageView("Modification non enregistrée : <br>".$updateMessage, "alert-danger");
			}	
		}else{ 
			$this->setView(getViewByName("UpdateUser"));
			$this->getView()->setUser($this->getUser());
			
		}
	}
}

?>
