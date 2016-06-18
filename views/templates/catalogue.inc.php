

<article>
	<section class="col-lg-offset-3 col-lg-8">
		<form method="post" action="Catalogue" class="form-horizontal col-lg-10" id="articleform">	
			<div class="form-group">

				<h3 class="text-center"><span class="label label-success">Créer un nouvel article</span></h3> 

			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="denomination">Dénomination</label>
					<div class="col-lg-6">
						<input  type="text" name="denomination" class="form-control" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="prix">Prix Unitaire</label>
					<div class="col-lg-6">
						<input  type="number" name="prix" class="form-control" >
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="commentaire">Commentaire</label>
					<div class="col-lg-6">
						<textarea  id="commentaire" name="commentaire" class="form-control" rows="5" ></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="disponibilite"><input type="checkbox" name="disponibilite" value=""> Pas encore disponible</label>
				</div>
			</div>
			<div class="row">
				<div class="footer">
					<input class="btn btn-danger pull-right" type="submit" value="Enregistrer" name="submit"/>
				</div>
			</div>
		</form>
	</section>
</article>
