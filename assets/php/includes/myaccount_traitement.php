<?php

class myaccount_traitement
{    
    function verifyPasswordAndMail($newMdp,$confirmNewMdp,$mail){
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            if(preg_match('/[^a-zA-Z\d]/',$newMdp) && preg_match('/\d/',$newMdp) && // ? On compare un regex à notre string
            preg_match('/[a-zA-Z]/',$newMdp) && strlen($newMdp) >= 8 && $newMdp === $confirmNewMdp){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    function ChangeMdp()
    {
        require('database.inc.php');

        $mdp = $_POST['password']; // ! Correspond à Nouveau mot de passe
        $newMdp = $_POST['confirm-password']; 
        $oldMdp = $_POST['old-password']; // ** hash le mdp pour le chercher dans la BDD
        if($this->verifyPasswordAndMail($mdp,$newMdp,$mail) == true){
            $query = "UPDATE Users SET mdp = " . "'" . $mdp . "' WHERE mdp = " . $oldMdp . " AND mail  = " . $mail;  // **  penser a stoker l'adresse mail du user a la connection pour vérifié le changement de mdp
            $req = $bdd->prepare($query);
            $req->execute();
        }
    }


}