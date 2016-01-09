<?php
include_once("views/View.inc.php");

class AccueilView extends View {

	/**
	 *
	 * @see View::displayBody()
	 */
	protected function displayBody() 
	{ 
		include("views/templates/accueil.inc.php");
	}

}
?>
