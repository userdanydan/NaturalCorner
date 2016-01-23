<?php
	include __DIR__.'/model/Utilisateur.class.php';
	date_default_timezone_set('Europe/Brussels');
	session_start();
	$action = getAction();
	$action->run();
	$view = $action->getView();
	$view->setLogin($action->getSessionLogin());
	$view->run();
	
	function getActionByName($name) 
	{
		$name .= 'Action';
		include("actions/$name.inc.php");
		$action1 = new $name();
		return $action1;
	}
	function getViewByName($name)
	{ /* Factory */
		$name .= 'View';
		include("views/$name.inc.php");
		$view1 = new $name();
		return $view1;
	}
	function getAction() 
	{ /* Factory */
		if (!isset($_REQUEST['action'])) 
			$action = 'Default';
		else 
			$action = $_REQUEST['action'];
		$actions = array('Default',  'Login', 'Logout', 'Inscription', 
				'Enregistrement', 'Accueil', 'UpdateUser', 'VoirCompte');
		if (!in_array($action, $actions)) 
			$action = 'Default';
		return getActionByName($action);
	}
?>


