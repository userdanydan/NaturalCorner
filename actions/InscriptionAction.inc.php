<?php
include_once("actions/Action.inc.php");
class InscriptionAction extends Action 
{

	/**
	 * Permet à un utilisateur de s'inscrire.
	 *
	 * @see Action::run()
	 */
	public function run() 
	{
		$this->setView(getViewByName("Inscription"));
	}
}
?>