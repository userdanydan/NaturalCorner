<nav class="row">
     <!-- Nav tabs -->
      <ul class="nav nav-tabs col-md-6 col-md-offset-3" role="tablist">
        <li role="presentation" class="active"><a href="#commandes" aria-controls="commandes" role="tab" data-toggle="tab">Commandes</a></li>
        <li role="presentation""><a href="#catalogue" aria-controls="catalogue" role="tab" data-toggle="tab">Catalogue</a></li>
        <li role="presentation"><a href="#utilisateurs" aria-controls="utilisateurs" role="tab" data-toggle="tab">Utilisateurs</a></li>
        <li role="presentation"><a href="#rayons" aria-controls="commandes" role="tab" data-toggle="tab">Rayons</a></li>
        <li role="presentation"><a href="#categories" aria-controls="commandes" role="tab" data-toggle="tab">Catégories</a></li>       
      </ul>
</nav>  
<article class="row">
      <!-- Tab panes -->
      <div class="tab-content">
      	<div role="tabpanel" class="tab-pane active" id="commandes">
        	<h3 class="text-center">Commandes</h3>
        	<article><?php include("views/templates/commandes_admin.inc.php");?></article>        	
        </div>
        <div role="tabpanel" class="tab-pane " id="catalogue">
        	<h3 class="text-center">Catalogue</h3>
        	<article><?php include("views/templates/catalogue_admin.inc.php");?></article>        	
        </div>
        <div role="tabpanel" class="tab-pane " id="utilisateurs">
        	<h3 class="text-center">Utilisateurs</h3>
        	<article><?php include("views/templates/utilisateurs_admin.inc.php");?></article>
        </div>
        <div role="tabpanel" class="tab-pane" id="rayons">
        	<h3 class="text-center">Rayons</h3>
        	<article><?php include("views/templates/rayons_admin.inc.php");?></article>       
        </div>
         <div role="tabpanel" class="tab-pane" id="categories">
        	<h3 class="text-center">Catégories</h3>
        	<article><?php include("views/templates/categories_admin.inc.php");?></article>       
        </div>
      </div>
</article>