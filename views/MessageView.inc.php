<?php
include_once("views/View.inc.php");

class MessageView extends View {

	/**
	 * Affiche un message à l'utilisateur.
	 *
	 * @see View::displayBody()
	 */
	public function displayBody() { 
		echo '</br></br></br></br></br><div class="col-lg-4 col-md-4 col-xs-2"></div>
				<div style="text-align:center" class="col-lg-4 col-md-4 col-xs-8 alert '.$this->style.'">'.$this->message.'</div>			
        	 <div class="col-lg-4 col-md-4 col-xs-2"></div></br></br></br></br></br>';
	}

}
?>
