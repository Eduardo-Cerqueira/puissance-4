<?php

class bdd {
    private $_mdp;
    private $_user;
    private $_host;
    private $_connect;
    private $_dbname;
    
    public function __construct($mymdp, $myuser, $myhost, $connect, $dbname)
    {

        $this->_mdp = $mymdp;
        $this->_user = $mymdp;
        $this->_host = $mymdp;
        $this->_connect = $mymdp;
        $this->_dbname = $mymdp;
            
    }

    public function getConnection(){

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=puissance-4', "root", "");
            foreach ($dbh->query('SELECT * from Game') as $row) {
                print_r($row);
            }
            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        
        echo "<br> cette personne est : ". $this->_connect;
        
    }
   

    
}

?>