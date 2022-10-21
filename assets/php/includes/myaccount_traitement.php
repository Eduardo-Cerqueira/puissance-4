<?php

class myaccount_traitement
{    
    function verifyPasswordAndMail($newMdp,$confirmNewMdp,$mail){
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            if(preg_match('/[^a-zA-Z\d]/',$newMdp) && preg_match('/\d/',$newMdp) && 
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
        $mail = $_SESSION['email']; // ! Adresse brut pour test
        

        $database = new database;
        $myBdd = $database->connectBdd();

        $mdp = $_POST['password']; // ! Correspond à Nouveau mot de passe
        $newMdp = $_POST['confirm-password'];
        $oldMdp = $_POST['old-password']; 

         var_dump(hash('sha256',$mdp)); //test hier 
      /* $_SESSION['email'] = ''; */
        if($this->verifyPasswordAndMail($mdp,$newMdp,$mail) == true){
            /* $query = "UPDATE Users SET password = " . "'" . $mdp . "' WHERE password =". "'" . $oldMdp  . "'" . "AND email  = " . "'" . $mail . "'"; */
            $query = "UPDATE Users SET password = ? WHERE password = ?"; 
            $req = $myBdd->prepare($query);
            $req->execute(array($mdp, $oldMdp));
            header("Location: http://127.0.0.1:12002/myaccount.php?success=1 ");
        }
        else{
            header("http://127.0.0.1:12001/myaccount.php?error=1");
        }
    }

    function VerifyOldmdp(){

        require('database.inc.php');
        $database = new database;
        $myBdd = $database->connectBdd();

        $oldMdp = $_POST['old-password'];

        $mail = $_SESSION['email']; // ! Adresse brut pour test

        $query = "SELECT password FROM Users WHERE email = " . "'" . $mail . "'";
        $req = $myBdd->prepare($query);
        $hashMdp = $req->execute();

        if ($hashMdp != hash('sha256',$oldMdp)) {
            header("Location: http://127.0.0.1:12001/myaccount.php?error=1");
        }
        else{$this->ChangeMdp();}
    }

}
$test = new myaccount_traitement();
$test->VerifyOldmdp();
var_dump("traitement");

