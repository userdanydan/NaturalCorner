

<article>
	<section class="col-lg-offset-3 col-lg-8">
		<form method="post" action="index.php?action=UpdateUser" class="form-horizontal col-lg-10" >	
			<div class="form-group">

				<h3 class="text-center"><span class="label label-success">Modification des informations</span></h3> 

			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="pseudo">Pseudo</label>
					<div class="col-lg-6">
						<input  type="text" name="pseudo" class="form-control" value="<?php echo $this->user->getPseudo(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="nom">Nom</label>
					<div class="col-lg-6">
						<input  type="text" name="nom" class="form-control" value="<?php echo $this->user->getNom(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="prenom">Prénom</label>
					<div class="col-lg-6">
						<input  type="text" name="prenom" class="form-control" value="<?php echo $this->user->getPrenom(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="email">E-mail</label>
					<div class="col-lg-6">
						<input  type="text" name="email" class="form-control" value="<?php echo $this->user->getAdresseMail(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="adresse">Adresse</label>
					<div class="col-lg-6">
						<input  type="text" name="adresse" class="form-control" value="<?php echo $this->user->getAdressePhysique(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="poste">Code postal</label>
					<div class="col-lg-6">
						<input  type="text" name="poste" class="form-control" value="<?php echo $this->user->getCodePostal(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="localite">Localité</label>
					<div class="col-lg-6">
						<input  type="text" name="localite" class="form-control" value="<?php echo $this->user->getLocalite(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="pwd">Mot de passe</label>
					<div class="col-lg-6">
						<input type="password" name="pwd" class="form-control" placeholder="Mot de passe">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="pwd2">Confirmation du nouveau mot de passe</label>
					<div class="col-lg-6">
						<input type="password" name="pwd2" class="form-control" placeholder="Confirmation">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="footer">
					<input class="btn btn-danger pull-right" type="submit" value="Modifier" name="submit"/>
				</div>
			</div>
		</form>
	</section>
</article>
