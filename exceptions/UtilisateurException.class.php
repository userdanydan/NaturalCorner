<?php

class UtilisateurExceptions extends Exception {

	public function __construct($string, $code=0) {
		parent::__construct($message, $code);
	}
	
}