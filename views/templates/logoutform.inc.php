<form class="navbar-form pull-right">
	<?php if ($this->login!=null)  $this->displayCommands(); ?>	
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=Logout" class="btn btn-danger" >Déconnexion</a>
	<span id="user" class="btn btn-default"><?php echo $this->login; ?></span> 
</form>


