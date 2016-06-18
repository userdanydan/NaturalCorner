<div class="row">
<div class="col-md-offset-3 col-md-6">
<a type="button" class="btn btn-default navbar-btn"  href="/Catalogue" data-toggle="tooltip" title="Ajouter un nouvel article" data-placement="right">
<span class="glyphicon glyphicon-plus" aria-hidden="true" ></span>
</a>
</div>
</div>
<div class="row">

<form class="col-md-offset-3 col-md-6" role="form"  action="/ModifierArticle" method="post">
<button type="submit" class="btn btn-default" data-toggle="tooltip" title="Modifier ou supprimer la sélection" data-placement="right">
<span class="glyphicon glyphicon-edit" aria-hidden="true" ></span>
</button>
<p></p>
<table class="table table-responsive table-bordered table-hover">
<thead>
<tr>
<th>Image</th>
<th>Dénomination</th>
<th>Prix Unitaire</th>
<th>Commentaire</th>
<th>Modifier</th>
</tr>
</thead>
<tbody>
<?php
if($this->getArticles()!==null){
    foreach ($this->getArticles() as $article){
        echo '<tr class="form-group">';
        echo '<td><img src="/stylesheets/img/fruits/'.$article->getDenomination().'.jpg" class="img-responsive img-thumbnail" alt="Cinque Terre"></td>';
        echo '<td id="idDenomination" name="denomination" >'.$article->getDenomination().'</td>';
        echo '<td id="idPrixUnitaire" name="prixUnitaire" >'.number_format($article->getPrixUnitaire()/100, 2).' &euro;</td>';
        echo '<td id="idCommentaire" name="commentaire">'.$article->getCommentaire().'</td>';
        echo '<td id="idCommentaire" name="commentaire">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadio" id="optionsRadio" value="'.$article->getDenomination().'">
                                        </label>
                                    </div>
                                </td>';
        echo '</tr>';
    }
}
?>
            </tbody>
          </table>
         
    	</form>
 </div>