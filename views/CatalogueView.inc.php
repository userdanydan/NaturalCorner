<?php
include_once("views/View.inc.php");

class CatalogueView extends View {
	
	/**
	 * Affiche une page pour gérer le catalogue.
	 *
	 * @see View::displayBody()
	 */
	protected function displayBody() {
		include('views/templates/catalogue.inc.php');
	}
}
?>