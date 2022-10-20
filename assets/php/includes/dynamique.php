<?php

class dynamique{

    function nbuser(){

       require('database.inc.php');

        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT COUNT(id) FROM Users";
        $req = $myBdd->prepare($query);
        $nbuser = $req->execute();
        return $nbuser; 
    }

    function bestscore(){

       require('database.inc.php');

        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT MIN(score) FROM Score";
        $req = $myBdd->prepare($query);
        $bestscore = $req->execute();
        return $bestscore; 
    }

    function nbpartie(){

       require('database.inc.php');

        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT COUNT(id) FROM Score";
        $req = $myBdd->prepare($query);
        $nbpartie = $req->execute();
        return $nbpartie; 
    }

    function usercon(){

       require('database.inc.php');

        $database = new database;
        $myBdd = $database->connectBdd();

        $query = "SELECT COUNT(connected) FROM Users WHERE connected == true";
        $req = $myBdd->prepare($query);
        $usercon = $req->execute();
        return $usercon; 
    }



}


?>      