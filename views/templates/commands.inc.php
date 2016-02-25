
	<div class="row">	
		<nav class="col-xs-6  col-sm-offset-1 col-sm-3  col-md-3 col-lg-3" style="display:inline;">
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
		 <div class="col-xs-4"> </div>	
		 <nav class="col-xs-1  col-sm-offset-6  col-md-offset-6 col-lg-offset-6 col-md-1 col-lg-1" style="display:inline;">   
			<div class="dropdown">
				<a type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
			        <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
			    </a>
			     <ul class="dropdown-menu">
		            <li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=VoirCompte';?>" class="bg-success">Voir Compte</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="" class="bg-info">Voir Panier</a></li>
		            <li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=Chercher' ?>" class="bg-info">Chercher</a></li>
		            <li role="separator" class="divider"></li>	            
		            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=Logout" class="bg-danger" >Déconnexion</a></li>
		            
		          </ul>
			 </div>
		</nav>
		<nav></nav>
		           
	</div>