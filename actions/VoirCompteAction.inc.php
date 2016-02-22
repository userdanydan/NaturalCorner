<?php

include_once("actions/Action.inc.php");

class VoirCompteAction extends Action 
{
	/**
	 * @see Action::run()
	 */
	public function run() 
	{
		$this->setView(getViewByName("VoirCompte"));
		$this->getView()->setUser($this->getUser());
		
	}


}

?>
