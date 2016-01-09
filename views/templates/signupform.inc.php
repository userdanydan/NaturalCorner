<article class="row">
	<section class="col-lg-offset-3 col-lg-8">
		<form method="post" action="index.php?action=SignUp" class="form-horizontal col-lg-10" style="border:1px solid silver; border-radius: 10px; box-shadow:6px 6px 6px grey" >	
			<div class="form-group">
				<legend>
					<h2>
						<div style="text-align:center;" class="alert ">Inscription</div>
					</h2>
				</legend>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="signUpLogin">Pseudo</label>
					<div class="col-lg-6">
						<input type="text" name="signUpLogin" class="form-control" placeholder="Pseudo">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="signUpPassword">Mot de passe</label>
					<div class="col-lg-6">
						<input type="password" name="signUpPassword" class="form-control" placeholder="Mot de passe">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="signUpPassword2">Confirmation</label>
					<div class="col-lg-6">
						<input type="password" name="signUpPassword2" class="form-control" placeholder="Confirmation">
					</div>
				</div>
			</div>
			<div class="row panel-footer">
				<div class="footer" style="margin-top:3em;">
					<input class="btn btn-danger pull-right" type="submit" value="Créer mon compte" />
				</div>
			</div>
		</form>
	</section>
</article>