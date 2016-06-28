
<article class="row">		
	<form class="col-md-offset-2 col-md-8" role="form"  action="/Panier" method="post">
    	<table class="table table-responsive table-bordered table-hover">
        <thead>
          <tr>
          	<th>Numéro</th>
          	<th>Image</th>
            <th>Dénomination</th>
            <th>Prix Unitaire</th>
            <th>Commentaire</th>
            <th>Quantité désirée</th>
            <th>Sélection</th>
          </tr>
        </thead>
        <tbody>
        	<?php 
        	if($this->getRecherche()!==null){
        	  $j=1;
              foreach ($this->getRecherche() as $article){
                  if($article->isEnVente()){
                      echo '<tr>';
                      echo '<td>'.($j).'</td>';
                      echo '<td><img src="/stylesheets/img/fruits/'.$article->getDenomination().'.jpg" class="img-responsive img-thumbnail" alt=" "></td>';
                      echo '<td id="idDenomination" name="denomination['.$article->getDenomination().']" >'.$article->getDenomination().'</td>';
                      echo '<td id="idPrixUnitaire" name="prixUnitaire['.$article->getDenomination().']" >'.number_format($article->getPrixUnitaire()/100, 2).' &euro;</td>';
                      echo '<td id="idCommentaire" >'.$article->getCommentaire().'</td>';
                      echo '<td id="idNbArticles" name="check"><div class="form-group"><label for="nbArticles"></label>
                              <select class="form-control" name="articles['.($j).'][nb]" id="nbArticles">';
                      echo '<option disabled selected value></option>';
                      
                         for($i=0; $i<=100; $i++){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                         }
                      echo '</select></div></td>';
                      echo '<td><div class="checkbox"><label><input type="checkbox" name="articles['.($j++).'][nom]" value='.$article->getDenomination().'></label></div></td>';
                      
                      echo '</tr>';
                      
                  }
              }
        	}
           ?>
        </tbody>
      </table>
      <button type="submit"  
				class="btn btn-default">Ajouter Panier</button>
	</form>
</article>
