<?php
include_once("views/View.inc.php");

class GerantView extends View {
    /**
     * @var array Utilisateurs : tous les utilisateurs de la database.
     */
    private $_utilisateurs;
    /**
     * 
     * @var array Commandes : toutes les commandes de la database.
     */
    private $_commandes;
    /**
     * Affiche une page avec le header et le footer.
     *
     * @see View::displayBody()
     */
    protected function displayBody() {
        include('views/templates/admin_panel.inc.php');
    }
    /**
     * Affiche tous les utilisateurs;
     */
    public function getUtilisateurs(){
        return $this->_utilisateurs;
    }
    /**
     *     Fixe les utilisateurs pour la vue.
     *     @param array Utilisateurs
     */
    public function setUtilisateurs($uts){
        $this->_utilisateurs = $uts;
    }
    /**
     *     Affiche tous les articles.
     *     @param array Article
     */
    public function setArticles($arts){
        $this->_articles = $arts;
    }
    /**
     *     Fixe les articles pour la vue.
     *     @return array Article
     */
    public function getArticles(){
        return $this->_articles;
    }
    /**
     *     Renvoie les commandes pour la vue.
     *     @return array Article
     */
    public function getCommandes(){
        return $this->_commandes;
    }
    /**
     *     Fixe les commandes pour la vue.
     *     @param array Commmandes
     */
    public function setCommandes($commandes){
        $this->_commandes = $commandes;
    }
}
?>

