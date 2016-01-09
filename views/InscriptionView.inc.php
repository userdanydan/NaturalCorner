<?php
include_once("views/View.inc.php");

class InscriptionView extends View {
	
	/**
	 * Affiche une page avec l'inscription.
	 *
	 * @see View::displayBody()
	 */
	protected function displayBody() {
		include('views/templates/inscription.inc.php');
	}
}
?>

