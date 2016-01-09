<!-- cop col du site Bootstrap -->
<h2>Inscription</h2>
<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=Enregistrement">
 <div class="form-group" >
    <label for="prenom">Prénom:</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>
  <div class="form-group">
    <label for="pwd">Nom:</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>
   <div class="form-group">
    <label for="email">Pseudo:</label>
    <input type="text" class="form-control" id="pseudo" name="pseudo">
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
   <div class="form-group">
    <label for="email">Adresse e-mail:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Adresse</label>
    <input type="text" class="form-control" id="adresse" name="adresse">
  </div>
  <div class="form-group">
    <label for="poste">Code postal:</label>
    <input type="text" class="form-control" id="poste" name="poste">
  </div>
  <div class="form-group">
    <label for="localite">Localité:</label>
    <input type="text" class="form-control" id="localite" name="localite">
  </div>
  <button type="submit" class="btn btn-default" id="boutonEnvoyer">Envoyer</button>
</form>