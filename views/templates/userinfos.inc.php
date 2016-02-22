<div class="block-center "> </br>

	<table class="table-responsive col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-sm-offset-3">
		<tr>
			<td class="label label-success">
				Prénom
			</td>
			<td>
				<div class="badge pull-right"><?php echo $this->user->getPrenom(); ?></div>
			</td>
		</tr>
		<tr><td></br></td></tr>
		<tr>
			<td class="label label-success">
				Nom
			</td>
			<td>
				<div class="badge pull-right"><?php echo $this->user->getNom(); ?></div>
			</td>
		</tr>
		<tr><td></br></td></tr>	
	  	<tr>
			<td class="label label-success">
				Pseudo
			</td>
			<td>
				<div class="badge pull-right"><?php echo $this->user->getPseudo(); ?></div>
			</td>
		</tr>
				<tr><td></br></td></tr>
		
		<tr>
			<td class="label label-success">
				Adresse email
			</td>
			<td>
				<div class="badge pull-right"><?php echo $this->user->getAdresseMail(); ?></div>
			</td>
		</tr>
				<tr><td></br></td></tr>
		
		<tr>
			<td class="label label-success">
				Adresse
			</td>
			<td>
				<div class="badge pull-right"><adresse><?php echo $this->user->getAdressePhysique(); ?><br>
													   <?php echo $this->user->getCodePostal(); ?> <?php echo $this->user->getLocalite(); ?></adresse></div>
			</td>
		</tr>
		
	</table>
</div>
<div class="row">
<p class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> </br></br></br></br>
	</p>
</div>
<div class="row">
		<a class="btn btn-default pull-right" href="<?php echo $_SERVER['PHP_SELF'].'?action=UpdateUser';?>">Modifier</a>
</div>
<div class="row">
<p class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> </br></br></br></br>
	</p>		
</div>
<div class="row">
	<div class="text-center">
		<a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=Logout" class="btn btn-danger" >Déconnexion</a>
	</div>
</div>