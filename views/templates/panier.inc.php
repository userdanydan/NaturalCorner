<div class="block-center "> </br>
<?php if($this->getPanier()!==null) { ?>
	    <form class="form-horizontal" role="form"  action="/Panier" method="post">
		<div class="row">
    	<table class="table-responsive table-bordered table-striped col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-sm-offset-3">

    		<thead>
    			<tr>
    				<th>N° ligne</th>
    				<th>Article</th>
    				<th>Quantité</th>
    				<th>Prix</th>
    				<th>Supprimer</th>
    			</tr>
    		</thead>
    		<tbody>
    		<?php 
    		    for($i=0; $i<$this->getPanier()->getNbLignes(); $i++){
    		        if($this->getPanier()->getLignePanier($i)!==NULL){
    		?>
    			<tr>
    				<td> 
    					<div class="text-center">
    						<h5 name="ligne[<?php echo $i?>][id]" value="<?php echo $this->getPanier()->getLignePanier($i)->getId()?>" > <?php echo $this->getPanier()->getLignePanier($i)->getId()+1;?></h5>
    					 </div> 
    			   </td> 		
        			<td>
        				<div class="text-center"><h5 name="ligne[<?php echo $this->getPanier()->getLignePanier($i)->getArticle()->getDenomination()?>][nom]" value="ligne<?php echo $this->getPanier()->getLignePanier($i)->getArticle()->getDenomination()?>">
        					   <?php echo $this->getPanier()->getLignePanier($i)->getArticle()->getDenomination(); ?></h5>
        										 <strong>&euro; <?php echo number_format($this->getPanier()->getLignePanier($i)->getArticle()->getPrixUnitaire()/100, 2);?></strong>
        				</div>
        			</td>
        			<td >
        			
            			<div class="text-center"><label for="nbArticles"></label>
                             <input  id="nbArticles" type="number" name="lignes[<?php echo $this->getPanier()->getLignePanier($i)->getId()?>][nbArticles]" class="form-control" min="0" max="99" value="<?php echo $this->getPanier()->getLignePanier($i)->getQuantite();?>">           
                        </div>
        			</td>
        			<td>
        				<div class="text-center "><?php echo number_format($this->getPanier()->getLignePanier($i)->getMontant()/100,2); ?> &euro;</div>
        			</td>
        			<td >
        				<div class="text-center">
        					<input type="checkbox" name="lignes[<?php echo $this->getPanier()->getLignePanier($i)->getId()?>][nbSupression]"
        						value="1">
        				</div>
        			</td>
        		</tr>
        		
    		<?php } }?>
    			<?php
    			    echo '<tfoot class=""><tr><td><h3 class="text-center"> <span class="label label-success">Total : '. number_format($this->getPanier()->getTotal()/100, 2) .' EUR</span></h3></td></tr></tfoot>';
    			?>
    		 
    		</tbody>
    	</table>
    	</div>
    	<p></p>
    	<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-sm-offset-3"><input class="btn btn-info center-block" type="submit" value="Recalculer" name="submit_recalculer"/></div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-sm-offset-3"><input class="btn btn-danger pull-right" type="submit" value="Commander" name="submit_commander"/></div> 		
   		</div>
   		
    	</form>
    	<?php  
    		  }else{
    		  echo '<p ><h3 class="text-center">Votre panier est vide.</h3></p>';
    		}
    		?>
</div>