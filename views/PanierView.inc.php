<?php
include_once("views/View.inc.php");

class PanierView extends View {

	/**
	 * @see View::displayBody()
	 */
	public function displayBody() {
	   
	    include('views/templates/panier.inc.php');

	}

}
?>

