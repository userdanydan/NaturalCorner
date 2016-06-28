<?php	
	include_once __DIR__.'/model/Utilisateur.class.php';
	include_once __DIR__.'/model/Panier.class.php';
	include_once __DIR__.'/model/LignePanier.class.php';
	include_once __DIR__.'/model/Article.class.php';
	include_once __DIR__.'/model/Adresse.class.php';
	include_once __DIR__.'/model/Rayon.class.php';
	include_once __DIR__.'/model/Categorie.class.php';
	include_once __DIR__.'/model/Commande.class.php';
	include_once __DIR__.'/model/Vendeur.class.php';
	
	
	date_default_timezone_set('Europe/Brussels');
    header('Content-Type: text/html; charset=utf-8');	
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
	{ 
	   /* Factory */
		$name .= 'View';
		include("views/$name.inc.php");
		$view1 = new $name();
		return $view1;
	}
	function getAction() 
	{ 
	   /* Factory */
	    $actions = array('Default','Login', 'Logout', 'Inscription',
	                     'Enregistrement', 'Accueil', 'UpdateUser', 
	                     'VoirCompte','UserJSON', 'RechercheRapide', 
	                     'RechercheAvancee', 'Panier', 'Catalogue', 
	                     'Gerant', 'ModifierArticle', 'Commander');
	    
	    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	    $path = ltrim($path, '/');
		if (!in_array($path, $actions)) 
			$action = 'Default';
		else 
			$action = $path;
		return getActionByName($action);
	}
?>


