<article class="row">
	<section class="col-lg-offset-3 col-lg-8">
		<form method="post" action="index.php?action=UpdateUser" class="form-horizontal col-lg-10" style="border:1px solid silver; border-radius: 10px; box-shadow:6px 6px 6px grey" >	
			<div class="form-group">
				<legend>
					<h2 style="text-align:center;">Modification du mot de passe </h2>
				</legend>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="signUpLogin">Pseudo</label>
					<div class="col-lg-6">
						<input disabled type="text" name="signUpLogin" class="form-control" placeholder="Pseudo" value="<?php echo $this->login; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="updatePassword">Mot de passe</label>
					<div class="col-lg-6">
						<input type="password" name="updatePassword" class="form-control" placeholder="Mot de passe">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="updatePassword2">Confirmation</label>
					<div class="col-lg-6">
						<input type="password" name="updatePassword2" class="form-control" placeholder="Confirmation">
					</div>
				</div>
			</div>
			<div class="row panel-footer">
				<div class="footer" style="margin-top:3em;">
					<input class="btn btn-danger pull-right" type="submit" value="Changer de mot de passe" />
				</div>
			</div>
		</form>
	</section>
</article>
