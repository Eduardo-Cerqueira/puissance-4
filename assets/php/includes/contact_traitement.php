<?php 
function verifyMail($mail){
    if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}
function verifyMessage($msg){
    if(strlen($msg) >= 15){
        return true;
    }
    else{
        return false;
    }
}

function verifyAll(){
    if(verifyMessage($_POST['message']) && verifyMail($_POST['mail'])){
        header("Location: http://127.0.0.1:12001/contact.php");
    }
    else{
        header("Location: http://127.0.0.1:12001/contact.php?error=1");
    }
}

verifyAll();

?>