<?php

class myaccount_traitement2{

    function verifyPasswordAndMaill($oldMdp,$confirmMdp,$mail){
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            if(preg_match('/[^a-zA-Z\d]/',$oldMdp) && preg_match('/\d/',$oldMdp) && // ? On compare un regex à notre string
            preg_match('/[a-zA-Z]/',$oldMdp) && strlen($oldMdp) >= 8 && $oldMdp === $confirmMdp){
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


    function ChangeMail()
    {
        $mail = $_SESSION['email']; // ! Adresse brut pour test 
     

        $database = new database;
        $myBdd = $database->connectBdd();

    
        $newmail = $_POST['mail']; 
        $newMdp = $_POST['confirm-password'];
        $oldMdp = $_POST['password']; 

         var_dump(hash('sha256',$oldMdp)); //test hier 
   
        if($this->verifyPasswordAndMaill($oldMdp,$newMdp,$mail) == true){
            $oldMdp = $_POST['password'];
            $mail = $_SESSION['email'];
            /* $query = "UPDATE Users SET email = " . "'" . $newmail . "' WHERE password =". "'" . $oldMdp; */ 
            $query = "UPDATE Users Set email = ? WHERE password = ? AND email = $mail";
            $req = $myBdd->prepare($query);
            $req->execute(array($newmail, $oldMdp));
            header("Location: http://127.0.0.1:12002/myaccount.php?success=1 ");
        }
        else{
            header("http://127.0.0.1:12001/myaccount.php?error=1");
        }
    }
    
    
    function VerifyOldmail(){

        require('database.inc.php');
        $database = new database;
        $myBdd = $database->connectBdd();

        $oldMail = $_SESSION['email'];
        

        $oldMdp = $_POST['password'];

        $query = "SELECT email FROM Users WHERE password = " . "'" . $oldMdp . "'";
        $req = $myBdd->prepare($query);
        $maill = $req->execute();

        if ($maill != $oldMail) {
            header("Location: http://127.0.0.1:12001/myaccount.php?error=1");
        }
        else{$this->ChangeMail();}
    }


}

$test = new myaccount_traitement2();
$test->VerifyOldmail();
var_dump("traitement");




?>