<!-- cop col du site Bootstrap -->

<article >

		  <form class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=Enregistrement"" >
			<div style="margin-left:1em;margin-right:1em;">
			<div class="form-group">

					<h3 class="text-center"><span class="label label-success">Inscription</span></h3> 

			</div>
		     <div class="form-group" >
			    <label for="email">Adresse e-mail*:</label>
			    <input type="email" class="form-control" id="email" name="email">
			  </div>
		  <div class="form-group">
		    <label for="pwd">Mot de passe*:</label>
		    <input type="password" class="form-control" id="pwd" name="pwd" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$" 
		    title="le mot de passe possède au moins 6 caractères, une lettre minuscule, une lettre majuscule et un chiffre">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Confirmer mot de passe*:</label>
		    <input type="password" class="form-control" id="pwd2" name="pwd2" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$" 
		    title="le mot de passe possède au moins 6 caractères, une lettre minuscule, une lettre majuscule et un chiffre">
		  </div>
		 <div class="form-group" >
		    <label for="prenom">Prénom:</label>
		    <input type="text" class="form-control" id="prenom" name="prenom" pattern="[0-9a-zA-Z]{3,128}" title="alphanumérique ayant au mois trois caractères">
		  </div>
		  <div class="form-group"  >
		    <label for="pwd">Nom:</label>
		    <input type="text" class="form-control" id="nom" name="nom" pattern="[0-9a-zA-Z]{3,128}" title="alphanumérique ayant au mois trois caractères">
		  </div>
		   <div class="form-group">
		    <label for="email">Pseudo:</label>
		    <input type="text" class="form-control" id="pseudo" name="pseudo" pattern="[0-9a-zA-Z]{3,128}" title="alphanumérique ayant au mois trois caractères">
		  </div>
		  <div class="form-group"  >
		    <label for="pwd">Adresse</label>
		    <input type="text" class="form-control" id="adresse" name="adresse">
		  </div>
		  <div class="form-group" >
		    <label for="poste">Code postal:</label>
		    <input type="text" class="form-control" id="poste" name="poste" pattern="[0-9]{4,5}" title="correspond à un code postal belge ou français.">
		  </div>
		  <div class="form-group">
		    <label for="localite">Localité:</label>
		    <input type="text" class="form-control" id="localite" name="localite" pattern="[0-9a-zA-Z]{1,128}" title="un nom de localité existant.">
		  </div>
		   <div class="form-group">
		  <button type="submit" class="btn btn-default" id="boutonEnvoyer">Envoyer</button>
		  </div>
		  <div class="col-sm-6 col-lg-6 col-md-6 col-md-offset-3">* champs obligatoires</div>
		  </div>
		</form>

</article>