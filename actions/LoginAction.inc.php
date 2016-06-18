<?php
include_once ("actions/Action.inc.php");
include_once  __DIR__.'/../model/Panier.class.php';
class LoginAction extends Action {
    
    /**
     * Traite les données envoyées par le visiteur via le formulaire de connexion
     * (variables $_POST['email'] et $_POST['password']).
     * Le mot de passe est vérifié en utilisant les méthodes de la classe Database.
     * Si le mot de passe n'est pas correct, on affiche le message "Pseudo ou mot de passe incorrect."
     * Si la vérification est réussie, le pseudo est affecté à la variable de session.
     *
     * @see Action::run()
     */
    public function run() {
        $fb = new Facebook\Facebook([ 
                'app_id' => '479325815604386',
                'app_secret' => '222768909de970fe4931805415d01b07',
                'default_graph_version' => 'v2.5' 
        ]);
        
        $helper = $fb->getRedirectLoginHelper();
        try {
            $accessToken = $helper->getAccessToken();
        } catch ( Facebook\Exceptions\FacebookResponseException $e ) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch ( Facebook\Exceptions\FacebookSDKException $e ) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
        if (isset($accessToken)) {
            $_SESSION ['FBToken'] = ( string ) $accessToken;
            $reponse = null;
            try {
                // Returns a `Facebook\FacebookResponse` object
                $response = $fb->get('/me?fields=id,name,email', $accessToken);
            } catch ( Facebook\Exceptions\FacebookResponseException $e ) {
                echo 'Graph returned an error: ' . $e->getMessage();
            } catch ( Facebook\Exceptions\FacebookSDKException $e ) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
            }
            
            // Returns a `Facebook\GraphNodes\GraphUser` collection
            $user = $response->getGraphUser();
            $infos = $user->all();
            // $utilisateurDejaIdentifie = $this->database->checkEmailAvailability ( $infos ['email'] );
            // if ($utilisateurDejaIdentifie === false) {
            // $this->database->addUser ( new UtilisateurFacebook ( '', '', $infos ['name'],
            // password_hash ( $infos ['id'], PASSWORD_BCRYPT, [ "cost" => PASSWORD_BCRYPT_DEFAULT_COST ] ),
            // $infos ['email'], '', '', '', new DateTime ( 'NOW' ),
            // filter_var ( isset ( $_SERVER ['REMOTE_ADDR'] ) ? $_SERVER ['REMOTE_ADDR'] : NULL, FILTER_VALIDATE_IP ) ) );
            // }
            print_r($infos);
            echo 'Name: ' . $user ['name'];
            echo 'Name: ' . $user->getName();
            
            // Logged in
            $this->setSessionLogin($user ['name']);
            $this->setView(getViewByName("Accueil"));
            // Store the $accessToken in a PHP session
            // You can also set the user as "logged in" at this point
        } elseif ($helper->getError()) {
            // There was an error (user probably rejected the request)
            echo '<p>Error: ' . $helper->getError();
            echo '<p>Code: ' . $helper->getErrorCode();
            echo '<p>Reason: ' . $helper->getErrorReason();
            echo '<p>Description: ' . $helper->getErrorDescription();
        }
        if (isset($_POST ['email']) && isset($_POST ['password'])) {
            if (! empty($_POST ['email']) && ! empty($_POST ['password'])) {
                if($this->database->checkAdminPassword($_POST ['email'], $_POST ['password'])){
                    $this->setUser($this->database->getUser($_POST ['email']));
                    $this->setSessionLogin("chef");
                    $this->setPanier(new Panier());
                    $this->setView(getViewByName("Gerant"));
                    $this->setView(getViewByName("ResultatsRecherche"));
                    $this->getView()->setRecherche($this->database->trouveArticles(""));
                }elseif ($this->database->checkPassword($_POST ['email'], $_POST ['password'])) {
                    $this->setUser($this->database->getUser($_POST ['email']));                    
                    if ($this->utilisateurSession->getPseudo() != null) {
                        $this->setSessionLogin($this->getUser()->getPseudo());
                        $this->setPanier(new Panier());
                    } elseif ($this->getUser()->getNom() != null && $this->getUser()->getPrenom() != null) {
                        $this->setSessionLogin($this->getUser()->getPrenom() . " " . $this->getUser()->getNom());
                        $this->setPanier(new Panier());
                    } else {
                        $this->setSessionLogin($this->getUser()->getAdresseMail());
                        $this->setPanier(new Panier());
                    }
                    $this->setView(getViewByName("ResultatsRecherche"));
                    $this->getView()->setRecherche($this->database->trouveArticles(""));
                } else {
                    $this->setView(getViewByName("Message"));
                    $this->getView()->setMessage("Pseudo ou mot de passe incorrect.", "alert-danger");
                }
            } else {
                $this->setView(getViewByName("Message"));
                $this->getView()->setMessage("Pseudo ou mot de passe incorrect.", "alert-danger");
            }
        }
    }
}
?>