<?php
class database
{
    public $bdd;

    public function connectBdd()
    {
        if ($this->bdd === null) {
            try {
                $dsn = 'mysql:host=192.168.64.2;dbname=puissance-4';
                $user = 'root';
                $password = '';

                $this->bdd = new PDO($dsn,$user,$password); 
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
            return $this->bdd;
        }
    }
}
