

<article>
	<section class="col-lg-offset-3 col-lg-8">
		<form method="post" action="/ModifierArticle" class="form-horizontal col-lg-10" >	
			<div class="form-group">

				<h3 class="text-center"><span class="label label-success">Modification des informations</span></h3> 
				</br></br></br>
				
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="pseudo">Dénomination</label>
					<div class="col-lg-6">
						<input  type="text" name="denomination" class="form-control" value="<?php echo $this->getArticle()->getDenomination(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="nom">Prix unitaire</label>
					<div class="col-lg-6">
						<input  type="number" name="prix" class="form-control" value="<?php echo $this->getArticle()->getPrixUnitaire(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-4" for="prenom">Commentaire</label>
					<div class="col-lg-6">
						<textarea class="form-control" name="commentaire" rows="3" ><?php echo $this->getArticle()->getCommentaire(); ?></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group ">
					<label class="control-label" for="disponibilite"><input input type="checkbox" name="disponibilite" value="" > Pas encore disponible</label>
				</div>
			</div>
			<div class="row">
				<div class="form-group ">
					<label class="control-label" for="supprimer"><input input type="checkbox" name="supprimer" value="" > Supprimer l'article</label>
				</div>
			</div>
			<div class="row">
				<div class="footer">
					<input class="btn btn-danger center-block" type="submit" value="Modifier" name="submit"/>
				</div>
			</div>
		</form>
	</section>
</article>
