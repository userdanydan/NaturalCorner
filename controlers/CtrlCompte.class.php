<?php
include_once(__DIR__.'/../actions/Action.inc.php');
/**
 * Contrôleur du compte.
 * @author Daniel
 */
trait CtrlCompte{
    /**
     * Vérifie la validité des données introduites par l'utilisateur.
     * @return mixed array 
     */
    public function verifierInput(){
        $filters = array(
                'email' => array(
                        'filter' => FILTER_SANITIZE_EMAIL | FILTER_SANITIZE_MAGIC_QUOTES,
                        'flags' => FILTER_NULL_ON_FAILURE ,
                ),
                'pwd' => array(
                        'filter' => FILTER_VALIDATE_REGEXP,
                        'flags' => FILTER_NULL_ON_FAILURE,
                        'options' => array('regexp'=>'/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/')
                ),
                'pwd2' => array(
                        'filter' => FILTER_VALIDATE_REGEXP,
                        'flags' => FILTER_NULL_ON_FAILURE,
                        'options' => array('regexp'=>'/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/')
                ),
                'prenom' => array(
                        'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
                        'flags' => FILTER_NULL_ON_FAILURE ,
                        'options' => array('regexp'=>'/^[0-9a-zA-Z]{3,128}$/')
                ),
                'nom' => array(
                        'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
                        'flags' => FILTER_NULL_ON_FAILURE,
                        'options' => array('regexp'=>'/^[0-9a-zA-Z]{3,128}$/')
                ),
                'pseudo' => array(
                        'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
                        'flags' => FILTER_NULL_ON_FAILURE ,
                        'options' => array('regexp'=>'/^[0-9a-zA-Z]{3,128}$/')
                ),
                'adresse' => array(
                        'filter' =>FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
                        'flags' => FILTER_NULL_ON_FAILURE
                ),'poste' => array(
                        'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
                        'flags' => FILTER_NULL_ON_FAILURE ,
                        'options' => array('regexp'=>'/^[0-9]{4,5}$/')
                ),
                'localite' => array(
                        'filter' => FILTER_VALIDATE_REGEXP | FILTER_SANITIZE_FULL_SPECIAL_CHARS | FILTER_SANITIZE_MAGIC_QUOTES,
                        'flags' => FILTER_NULL_ON_FAILURE,
                        'options' => array('regexp'=>'/^[0-9a-zA-Z]{1,128}$/')
                )
        );
        return filter_var_array($_POST, $filters);
    }
    /**
     * @param array $form_data données introduite au moment de l'inscription.
     * @param string $message message d'erreur eventuel.
     * @return bool si l'utilisateur est inséré dans le catalogue.
     */
    public function ajouterUtilisateur($form_data, $insertionMessage=''){
        $estInsere=false;
        $utilisateur = new Utilisateur($form_data['prenom'], $form_data['nom'], $form_data['pseudo'],
                password_hash($form_data['pwd'], PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]),
                $form_data['email'], $form_data['adresse'], $form_data['poste'],
                $form_data['localite'], new DateTime('NOW'),
                filter_var(isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : NULL, FILTER_VALIDATE_IP));
        try{
            $estInsere = $this->database->addUser($utilisateur);
        }catch(EmailAlreadyTakenException $eate){
            $estInsere=false;
            $insertionMessage = $eate->getMessage();
        }
        return $estInsere;
    }
    /**
     * @param array $form_data données introduite au moment de la modification.
     * @param string $updateMessage message d'erreur eventuel.
     * @return bool si l'utilisateur est modifié dans le catalogue.
     */
    public function modifierUtilisateur($form_data, $updateMessage){
        $estModifie=false;
        $emailID=$this->getUser()->getAdresseMail();
        if($form_data['pwd']!==null){
            if($form_data['pwd']===$form_data['pwd2']){
                $this->getUser()->setPass(password_hash($form_data['pwd'], PASSWORD_BCRYPT, ["cost"=>PASSWORD_BCRYPT_DEFAULT_COST]));
            }else{
                $updateMessage.="Le mot de passe n'a pas été convenablement confirmé.";
            }
        }
        if($form_data['nom']!==null){
            try{
                $this->getUser()->setNom($form_data['nom']);
            }catch(UtilisateurException $ue){
                $updateMessage.=$ue->getMessage().'<br>';
            }
        }
        if($form_data['prenom']!==null){
            try{
                $this->getUser()->setPrenom($form_data['prenom']);
            }catch(UtilisateurException $ue){
                $updateMessage.=$ue->getMessage().'<br>';
            }
        }
        if($form_data['pseudo']!==null){
            try{
                $this->getUser()->setPseudo($form_data['pseudo']);
            }catch(UtilisateurException $ue){
                $updateMessage.=$ue->getMessage().'<br>';
            }
        }
        
        if($form_data['adresse']!==null){
            try{
                $this->getUser()->setAdressePhysique($form_data['adresse']);
            }catch(UtilisateurException $ue){
                $updateMessage.=$ue->getMessage().'<br>';
            }
        }
        if($form_data['localite']!==null){
            try{
                $this->getUser()->setLocalite($form_data['localite']);
            }catch(UtilisateurException $ue){
                $updateMessage.=$ue->getMessage().'<br>';
            }
        }
        if($form_data['poste']!==null){
            try{
                $this->getUser()->setCodePostal($form_data['poste']);
            }catch(UtilisateurException $ue){
                $updateMessage.=$ue->getMessage().'<br>';
            }
        } 
        if($form_data['email']!==null){
            try{
                $this->getUser()->setAdresseMail($form_data['email']);
            }catch(UtilisateurException $ue){
                $updateMessage.=$ue->getMessage().'<br>';
            }
        }
        if($updateMessage===''){
            try{
                $estModifie = $this->database->updateUser($this->getUser(), $emailID);
            }catch(EmailAlreadyTakenException $e){
                $updateMessage.=$e->getMessage().'<br>';
            }
        }
        return $estModifie;
    }
}