<?php
class database

{
    public $bdd;

    public function connectBdd()
    {
        
        if ($this->bdd === null) {
            try {
                $this->bdd =  new PDO("mysql:host=localhost;dbname=puissance4" ,"root", ""); 
    
            }   catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
            return $this->bdd;
        }
    }
}

?>