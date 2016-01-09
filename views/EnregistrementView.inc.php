<?php
include_once("views/View.inc.php");

class EnregistrementView extends View {
	
	/**
	 * Affiche une page avec le header et le footer.
	 *
	 * @see View::displayBody()
	 */
	protected function displayBody() {
		include('views/templates/enregistrement');
	}
}
?>

