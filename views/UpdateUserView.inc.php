<?php
include_once("views/View.inc.php");

class UpdateUserView extends View {

	/**
	 * Affiche le formulaire de modification de mot de passe.

	 * @see View::displayBody()
	 */
	public function displayBody() {
		include("views/templates/updateuserform.inc.php");
	}

}
?>

