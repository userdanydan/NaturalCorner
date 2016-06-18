<section class="row">
	<form class="col-md-offset-1 col-md-6" role="form"  action="/Panier" method="post">
    	<table class="table table-responsive table-bordered table-hover">
        <thead>
          <tr>
          	<th></th>
          	<th>PRENOM</th>
          	<th>NOM</th>
            <th>PSEUDO</th>
            <th>ADRESSE_MAIL</th>
            <th>ADRESSE_PHYSIQUE</th>
            <th>CODE_POSTAL</th>
            <th>LOCALITE</th>
            <th>DATE INSCRIPTION</th>
            <th>IP_CONNEXION</th>
          </tr>
        </thead>
        <tbody>
        	<?php 
        	if($this->getUtilisateurs()!==null){
              foreach ($this->getUtilisateurs() as $utilisateur){
                      echo '<tr>';
                          echo '<td><div class="checkbox"><label><input type="checkbox" name="check" value='.$utilisateur->getAdresseMail().'></label></div></td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getPrenom().'</td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getNom().'</td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getPseudo().'</td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getAdresseMail().'</td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getAdressePhysique().'</td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getCodePostal().'</td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getLocalite().'</td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getDateInscription().'</td>';
                          echo '<td id="idCommentaire" >'.$utilisateur->getIdConnexion().'</td>';
                      echo '</tr>';
              }
        	}
           ?>
        </tbody>
      </table>
      <button type="submit"  
				class="btn btn-default">Do</button>
	</form>
</section>