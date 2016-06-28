<!-- cop col du site Bootstrap -->
<?php 

	$fb = new Facebook\Facebook([
			'app_id' => '479325815604386',
			'app_secret' => '222768909de970fe4931805415d01b07',
			'default_graph_version' => 'v2.5'
	]);
	
	$helper = $fb->getRedirectLoginHelper();
	
	
	$permissions = ['email']; // Optional permissions*/
	$loginUrl = $helper->getLoginUrl('https://naturalcorner-1.appspot.com/index.php?action=Login', $permissions);
?>
</br>
<div class="row">
	<div class="col-xs-1 col-sm-3 col-md-4 col-lg-4"></div>
	  <div id="login" class="col-xs-10 col-sm-6 col-md-4 col-lg-4">
	  	<a type="button" class="btn btn-primary center center-block" href="<?php echo $loginUrl?>">
	  		<img class="pull-left" width="20" height="20" src="/stylesheets/img/fb_icon_325x325.png" alt="fb"/> Login avec Facebook</a>
	  </div>
	  <div class="col-xs-1 col-sm-3 col-md-4 col-lg-4"></div>
</div>
</br>
<div class="row">
	<div class="col-xs-1 col-sm-3 col-md-4 col-lg-4"></div>
	<form role="form" class="col-xs-10 col-sm-6 col-md-4 col-lg-4" method="post" action="/Login">
	  <div class="form-group">
	    <label for="email"><strong>Email:</strong></label>
	    <input type="text" class="form-control" name="email" id="email">
	  </div>
	  <div class="form-group">
	    <label for="password"><strong>Mot de passe:</strong></label>
	    <input type="password" class="form-control" name="password" id="password">
	  </div>
	  <button type="submit" class="btn btn-default" href="">Login</button>
	  <a class="btn btn-success pull-right" type="button" style='color:white' href="/Inscription">
				Inscription</button> 
	  </a> 
	</form>
	<div class="col-xs-1 col-sm-3 col-md-4 col-lg-4"></div>
</div>	
<div class=row>
	</br>
	<adresse class="lead text-center col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4  col-sm-offset-3 col-sm-6  col-xs-offset-1 col-xs-10 ">
		<small>Du Lundi au Samedi de 10h à 20h</br>
		Le Dimanche et les jours fériés de 11h à 19h</small>
	</adresse>	
</div>
<div class=row>
	<adresse class="lead text-center col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4  col-sm-offset-3 col-sm-6  col-xs-offset-1 col-xs-10 "><small>Rue de l'escalier 1, 1000 Bruxelles
	+32.(0)2.513.30.13 -</small>
					<a class="lead" href="mailto:info@naturalcorner.be">info@naturalcorner.be</a></adresse>	
</div>
