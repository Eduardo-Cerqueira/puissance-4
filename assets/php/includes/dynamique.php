<?php
include 'database.inc.php';

class dynamique{
    
    
    function nbuser(){
        
        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT COUNT(id) FROM Users";
        $req = $myBdd->prepare($query);
        $nbuser = $req->execute();
        unset($database);
        return $nbuser; 
    }

    function bestscore(){

        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT MIN(score) FROM Score";
        $req = $myBdd->prepare($query);
        $bestscore = $req->execute();
        unset($database);
        return $bestscore; 
    }

    function nbpartie(){

        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT COUNT(id) FROM Score";
        $req = $myBdd->prepare($query);
        $nbpartie = $req->execute();
        unset($database);
        return $nbpartie; 
    }

    function usercon(){

        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT COUNT(connected) FROM Users WHERE connected = true";
        $req = $myBdd->prepare($query);
        $usercon = $req->execute();
        unset($database);
        return $usercon; 
    }



}


?>      