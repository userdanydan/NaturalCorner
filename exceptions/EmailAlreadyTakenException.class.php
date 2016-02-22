<?php
class EmailAlreadyTakenException extends UtilisateurException {

	public function __construct($string, $code=0) {
		parent::__construct($message, $code);
	}

}