<!-- cop col du site Bootstrap -->
<?php 
// 	$fb = new Facebook\Facebook([
// 			'app_id' => '479325815604386',
// 			'app_secret' => '222768909de970fe4931805415d01b07',
// 			'default_graph_version' => 'v2.5',
// 	]);

// 	$helper = $fb->getRedirectLoginHelper();
	
// 	$permissions = ['email']; // Optional permissions*/

	
// ?>
</br>
</br>
</br>
</br>
</br>

<div class="col-xs-1 col-md-4 col-lg-4"></div>
<form role="form" class="col-xs-10 col-md-4 col-lg-4" method="post" action="index.php?action=Login">
  <div class="form-group">
    <label for="nickname">Email:</label>
    <input type="text" class="form-control" name="nickname" id="nickname">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe:</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <button type="submit" class="btn btn-default" href="">Login</button>
  <button type="button" class="btn btn-primary pull-right" href="<?php echo $loginUrl?>">Login avec Facebook!</button>
</form>
<div class="col-xs-1 col-md-4 col-lg-4"></div>