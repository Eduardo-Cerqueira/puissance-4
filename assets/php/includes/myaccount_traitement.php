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
        $database = new database;
        $myBdd = $database->connectBdd();

        $mdp = $_POST['password']; // ! Correspond à Nouveau mot de passe
        $newMdp = $_POST['confirm-password']; 
        $oldMdp = $_POST['old-password']; // ** hash le mdp pour le chercher dans la BDD
      
        if($this->verifyPasswordAndMail($mdp,$newMdp,$mail) == true){
            $query = "UPDATE Users SET mdp = " . "'" . $mdp . "' WHERE mdp = " . $oldMdp . " AND email  = " . $mail;  // **  penser a stoker l'adresse mail du user a la connection pour vérifié le changement de mdp
            $req = $myBdd->prepare($query);
            $req->execute();
            header("Location: http://127.0.0.1:12001/myaccount.php?success=1");
        }
    }

    function VerifyOldmdp(){

        require('database.inc.php');
        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT INTO mdp FROM Users WHERE email = ".  $mail;
        $req = $myBdd->prepare($query);
        $hashMdp = $req->execute();

        $oldMdp = $_POST['old-password'];

        if ($hashMdp == hash('sha256',$oldMdp)) {
            exit();
        } else {
            header("Location: http://127.0.0.1:12001/myaccount.php?error=1");
        }



    }

}

$test = new myaccount_traitement();
$test->VerifyOldmdp();
$test->ChangeMdp();
var_dump("traitement");