<?php
class AdresseException extends Exception {

	public function __construct($string, $code=0) {
		parent::__construct($message, $code);
	}

}