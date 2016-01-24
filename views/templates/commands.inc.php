
	<div class="row">	
		<nav class="col-xs-6  col-sm-6  col-md-6 col-lg-6" style="display:inline;">
	        <a type="button" class="btn btn-default navbar-btn" href="<?php echo $_SERVER['PHP_SELF'].'?action=VoirCompte';?>"> 
		        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		    </a>
		    <a type="button" class="btn btn-default navbar-btn" href="<?php echo $_SERVER['PHP_SELF'].'?action=Panier' ?>"> 
		        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
		    </a>
		    <a type="button" class="btn btn-default navbar-btn" href="<?php echo $_SERVER['PHP_SELF'].'?action=Chercher' ?>"> 
		        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		    </a>
		 </nav>
		 
		 <nav class="col-xs-6  col-sm-6  col-md-6 col-lg-6" style="display:inline;">   
			<div class="dropdown">
				<a type="button" class="btn btn-default navbar-btn dropdown-toggle pull-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
			        <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
			    </a>
			     <ul class="dropdown-menu">
		            <li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=VoirCompte';?>" class="bg-success">Voir Compte</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=Panier' ?>" class="bg-info">Voir Panier</a></li>
		            <li><a href="#" class="bg-info">Commander</a></li>
		            <li role="separator" class="divider"></li>	            
		            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=Logout" class="bg-danger" >Déconnexion</a></li>
		            
		          </ul>
			 </div>
			<?php if($this->login!=null) 
// 				echo"<div class=\"btn btn-success navbar-btn  pull-right\">".$this->login."</div>"?>
		</nav>	           
	</div>
<div class="row">
		<nav class="col-lg-6 col-md-6  col-sm-6  col-xs-6 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-offset-3">
			 	<a href="<?php echo $_SERVER['PHP_SELF'].'?action=Default';?>">
					<img src="/stylesheets/img/natural_corner.jpg" class="img-responsive" alt="Responsive image">
				</a>
		</nav>
	</div>