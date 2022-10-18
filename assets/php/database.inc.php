
<?php

class Request {




  private $type;
  private $dbname;
  private $host;
  private $username;
  private $password;
  private $bdd;

  public function __construct($type,$host,$dbname,$username,$password){

    $this->type = $type;
    $this->dbname = $dbname;
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;

  }

  public function getmybdd(){
    try {
      if ($this->bdd ===null){
          $this->bdd = new PDO($this->type.':host='.$this->host.';dbname='.$this->dbname.'',$this->username, $this->password);
          foreach($this->bdd->query('SELECT * from user') as $row) {
            print_r($row);
          }
      }
    } catch (PDOException $e) {
      print "Erreur ! Connection à la base de donné impossible".$e->getMessage()." <br/>";
      die();
    }
    return $this->bdd;
  }

  public function getAllRow($myTable){
    foreach($this->bdd->query('SELECT * FROM '. $myTable) as $row) {
      print_r($row);
    }
  }

  public function setInsert($nom, $prenom, $adress, $age){
      $query="INSERT INTO intervenants (" . "nom, prenom, adresse, age ".") VALUES (" . "'".$nom . "',". "'".$prenom . "'," ."'".$adress . "'," . "'".$age . "')";
      // pour comprendre à quoi sert une requête préparé et son execution : http://php.net/manual/fr/pdo.prepared-statements.php
      $req = $this->bdd->prepare($query);
      echo $query;
      $req->execute();
      return true;
  }

  public function deleteRow($tableBDD,$columnBDD,$value){
    $query = "DELETE FROM ".$tableBDD." WHERE ".$columnBDD." LIKE "."'".$value."'";
    var_dump($query);
    $req = $this->bdd->prepare($query);
    $req->execute();
    return true;
  }




  public function inscription($tableBDD,$columnBDD,$password,$value){
    $query = "'"."SELECT * FROM ".$tableBDD."'";
    var_dump($query); //taille mdp
    $req = $this->bdd->query($query);
    print_r($req);
    return $req;
  }
}

//Le mail doit être un mail valide
//Le mot de passe doit faire au minimum 8 caractères, 
//comprendre au moins un chiffre, 
//une majuscule et un caractère spécial
//Le pseudo doit faire au minium 4 caractères

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $test = new Request("mysql", "localhost", "puissance4", "root", "");
        $test->getmybdd();
        echo $test->inscription("user", "mail","1234", "1");
    ?>
</body>
</html>