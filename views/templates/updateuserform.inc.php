

<article>
	<section ng-app="myApp" ng-controller="customersCtrl" class="col-lg-offset-3 col-lg-8">
		<form ng-repeat="x in myData" method="post" action="index.php?action=UpdateUser" class="form-horizontal col-lg-10" >	
			<div class="form-group">

				<h3 class="text-center"><span class="label label-success">Modification des informations</span></h3> 

			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="pseudo">Pseudo</label>
					<div class="col-lg-6">
						<input  type="text" name="pseudo" class="form-control" value="{{x._pseudo}}" pattern="[0-9a-zA-Z]{3,128}" title="alphanumérique ayant au mois trois caractères">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="nom">Nom</label>
					<div class="col-lg-6">
						<input  type="text" name="nom" class="form-control" value="{{x._nom}}"pattern="[0-9a-zA-Z]{3,128}" title="alphanumérique ayant au mois trois caractères">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="prenom">Prénom</label>
					<div class="col-lg-6">
						<input  type="text" name="prenom" class="form-control" value="{{x._prenom}}" pattern="[0-9a-zA-Z]{3,128}" title="alphanumérique ayant au mois trois caractères">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="email">E-mail</label>
					<div class="col-lg-6">
						<input  type="text" name="email" class="form-control" value="{{x._adresseMail}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="adresse">Adresse</label>
					<div class="col-lg-6">
						<input  type="text" name="adresse" class="form-control" value="{{x._adressePhysique}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="poste">Code postal</label>
					<div class="col-lg-6">
						<input  type="text" name="poste" class="form-control" value="{{x._codePostal}}" pattern="[0-9]{4,5}" title="correspond à un code postal belge ou français.">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="localite">Localité</label>
					<div class="col-lg-6">
						<input  type="text" name="localite" class="form-control" value="{{x._localite}}" pattern="[0-9a-zA-Z]{1,128}" title="un nom de localité existant.">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="pwd">Mot de passe</label>
					<div class="col-lg-6">
						<input type="password" name="pwd" class="form-control" placeholder="Mot de passe" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$" 
		    title="le mot de passe possède au moins 6 caractères, une lettre minuscule, une lettre majuscule et un chiffre">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="pwd2">Confirmation du nouveau mot de passe</label>
					<div class="col-lg-6">
						<input type="password" name="pwd2" class="form-control" placeholder="Confirmation" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$" 
		    title="le mot de passe possède au moins 6 caractères, une lettre minuscule, une lettre majuscule et un chiffre">
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
