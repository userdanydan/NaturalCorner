<!-- cop col du site Bootstrap -->
<?php 
	$fb = new Facebook\Facebook([
			'app_id' => '479325815604386',
			'app_secret' => '222768909de970fe4931805415d01b07',
			'default_graph_version' => 'v2.5',
	]);
	
	$helper = $fb->getRedirectLoginHelper();
	
	
	$permissions = ['email']; // Optional permissions*/
	$loginUrl = $helper->getLoginUrl('https://naturalcorner-1.appspot.com/index.php?action=Login', $permissions);
?>

<div class="row">
	<div class="col-xs-1 col-md-4 col-lg-4"></div>
	  <div class="col-xs-10 col-md-4 col-lg-4">
	  	<a type="button" class="btn btn-primary center center-block" href="<?php echo $loginUrl?>"> Login avec Facebook!</a>
	  </div>
	  <div class="col-xs-1 col-md-4 col-lg-4"></div>
</div>
</br>
</br>
<div></div>
</br>
</br>
</br>
<div class="row">
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
	</form>
	<div class="col-xs-1 col-md-4 col-lg-4"></div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></br></div>
</div>
<div class="row">
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4">
			<a style='color:green' href="<?php echo $_SERVER['PHP_SELF'].'?action=Inscription';?>">
				<h3>Inscription</h3> 
			</a> 
		</div>
</div>
