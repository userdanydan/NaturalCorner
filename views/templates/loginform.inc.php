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
<div class="row">
	<div class="col-xs-1 col-md-4 col-lg-4"></div>
	  <div class="col-xs-10 col-md-4 col-lg-4">
	  	<a type="button" class="btn btn-primary center center-block" href="<?php echo $loginUrl?>">
	  		<img class="pull-left" width="20" height="20" src="/stylesheets/img/fb_icon_325x325.png" alt="fb"/> Login avec Facebook</a>
	  </div>
	  <div class="col-xs-1 col-md-4 col-lg-4"></div>
</div>
</br>
<div>
	<div class="col-xs-1 col-md-4 col-lg-4"></div>
	<form role="form" class="col-xs-10 col-md-4 col-lg-4" method="post" action="index.php?action=Login">
	  <div class="form-group">
	    <label for="email"><strong>Email:</strong></label>
	    <input type="text" class="form-control" name="email" id="email">
	  </div>
	  <div class="form-group">
	    <label for="password"><strong>Mot de passe:</strong></label>
	    <input type="password" class="form-control" name="password" id="password">
	  </div>
	  <button type="submit" class="btn btn-default" href="">Login</button>
	  <button class="btn btn-success pull-right"><a style='color:white' href="<?php echo $_SERVER['PHP_SELF'].'?action=Inscription';?>">
				Inscription</button> 
	  </a> 
	</form>
	<div class="col-xs-1 col-md-4 col-lg-4"></div>
</div>
