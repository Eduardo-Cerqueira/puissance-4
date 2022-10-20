<?php
class database

{
    public $bdd;

    public function connectBdd()
    {
        
        if ($this->bdd === null) {
            try {
                $this->bdd = new PDO('mysql:host=localhost:8889;dbname=puissance-4','root','root'); 
    
            }   catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
            return $this->bdd;
        }
    }
}

?>