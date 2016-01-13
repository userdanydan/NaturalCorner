<!--  <a class="btn btn-success" href="<?php echo $_SERVER['PHP_SELF'].'?action=AddElections' ?>">Nouvelle election</a>
<a class="btn" href="<?php echo $_SERVER['PHP_SELF'].'?action=GetMyElections' ?>">Election en cours</a>
<a class="btn" href="<?php echo $_SERVER['PHP_SELF'].'?action=UpdateUserForm' ?>">Changer de mot de passe</a>-->

			<section>
        		<nav>
        				<a type="button" class="btn btn-default navbar-btn" href="<?php echo $_SERVER['PHP_SELF'].'?action=Compte';?>"> 
			           		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			            </a>
			            <a type="button" class="btn btn-default navbar-btn" href="<?php echo $_SERVER['PHP_SELF'].'?action=Panier' ?>"> 
			           		<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
			            </a>
			            <a type="button" class="btn btn-default navbar-btn" href="<?php echo $_SERVER['PHP_SELF'].'?action=Chercher' ?>"> 
			           		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			            </a>
				  		<a type="button" class="btn btn-default navbar-btn pull-right" > 
			           		<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
			           </a>
        		</nav>
        	</section>