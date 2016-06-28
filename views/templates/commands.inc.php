
	<div class="row">	
		<nav class="col-xs-6  col-sm-offset-1 col-sm-3  col-md-3 col-lg-3" style="display:inline;">
	        <a type="button" class="btn btn-default navbar-btn" href="/VoirCompte" data-toggle="tooltip" title="Voir compte" data-placement="bottom"> 
		        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		    </a>
		    <a type="button" class="btn btn-default navbar-btn" href="/Panier" data-toggle="tooltip" title="Voir Panier" data-placement="bottom"> 
		        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
		    </a>
		    <a type="button" class="btn btn-default navbar-btn" href="/RechercheRapide" data-toggle="tooltip" title="Chercher un article" data-placement="bottom"> 
		        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		    </a>
		    <?php 
    		    if($this->login==='chef'){
    		        echo '<a type="button" class="btn btn-default navbar-btn" href="/Gerant" data-toggle="tooltip" title="Outils d\'administration" data-placement="bottom"> 
    		                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    		              </a>';
    		    }
		    ?>
		 </nav>
		 <div class="col-xs-4"><h4>Panier de <?php echo $this->login; ?> nb Art. : <?php if($this->getPanier()!==NULL ) echo $this->getPanier()->getNbLignes();?> Total : <?php if($this->getPanier()!==NULL ) echo number_format($this->panier->getTotal()/100, 2);?> &euro;</h4></div>
		 <nav class="col-xs-1  col-sm-offset-6  col-md-offset-6 col-lg-offset-6 col-md-1 col-lg-1" style="display:inline;">   
			<div class="dropdown">
				<a type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
			        <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
			    </a>
			     <ul class="dropdown-menu dropdown-menu-right">
		            <li><a href="/VoirCompte" class="bg-success">Voir Compte</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="" class="bg-info">Voir Panier</a></li>
		            <li><a href="/Chercher" class="bg-info">Chercher</a></li>
		            <li role="separator" class="divider"></li>	            
		            <li><a href="/Logout" class="bg-danger" >Déconnexion</a></li>
		            
		          </ul>
			 </div>
		</nav>		           
	</div>