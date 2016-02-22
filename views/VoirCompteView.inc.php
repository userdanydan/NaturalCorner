<?php
include_once("views/View.inc.php");

class VoirCompteView extends View {

	/**
	 * Affiche le formulaire de modification de mot de passe.

	 * @see View::displayBody()
	 */
	public function displayBody() {
		include("views/templates/userinfos.inc.php");
	}

}
?>

