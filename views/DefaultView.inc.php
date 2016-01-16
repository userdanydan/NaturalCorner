<?php
include_once("views/View.inc.php");

class DefaultView extends View {
	
	/**
	 * Affiche une page avec le header et le footer.
	 *
	 * @see View::displayBody()
	 */
	protected function displayBody() {
		if($this->login==null)
			include('views/templates/loginform.inc.php');
	}
}
?>

