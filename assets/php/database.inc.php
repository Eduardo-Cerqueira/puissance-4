
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
        $this->bdd = new PDO($this->type.":host=".$this->host.";dbname=".$this->dbname ,$this->username,$this->$password);
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

  public function register() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mail = $_POST["mail"];
        $password = $_POST["pass"];
        $confirmPassword = $_POST["confirmpass"];
        $username = $_POST["username"];
        if (!isset($name)){'veillez mettre un nom';}
        $good_user = 0;
        if (filter_var($mail, FILTER_VALIDATE_EMAIL) ? "true" : "false" == "true"){$good_user+=1;}
        if (strlen($username)>3/*à changer*/){$good_user+=1;}
        if (strlen($password)>7/*à changer*/){$good_user+=1;}
        if (preg_match('`[0-9]`',$password)>0){$good_user+=1;}
        if (preg_match('`[A-Z]`',$password)>0){$good_user+=1;}
        if (preg_match('/[^a-zA-Z\d]/',$password)>0){$good_user+=1;}
        echo $good_user;
        if ($good_user == 6 && $password == $confirmPassword) {
        echo ('test');
        $query = 'INSERT INTO user (mail, username, password) VALUES ("'.$mail.'", "'.$username.'","'.$password.'")';
        $req = $this->bdd->prepare($query);
        $req->execute();
        }
    }
  }
}

//Le mail doit être un mail valide
//Le mot de passe doit faire au minimum 8 caractères, 
//comprendre au moins un chiffre, 
//une majuscule et un caractère spécial
//Le pseudo doit faire au minium 4 caractères

?>
