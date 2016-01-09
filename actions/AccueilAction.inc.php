<?php
include_once("actions/Action.inc.php");
class DefaultAction extends Action
{

	/**
	 * @see Action::run()
	 */
	public function run()
	{
		$this->setView(getViewByName("Accueil"));
	}
}
?>