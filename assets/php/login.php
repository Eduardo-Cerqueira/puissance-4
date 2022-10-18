<?php


class Request {
    private $type;
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $bdd;
  
  
      /**
       * Lorsqu'on va vouloir créer un objet de ce type il faudra
       * appeler cette méthode constructeur via le mot clé New depuis
       * une autre classe afin de l'instancier(initialiser) en lui
       * donnant scrupuleusement le nombre d'argument ici indiqué entre parenthése
       * request constructor.
       * @param $type
       * @param $host
       * @param $dbname
       * @param $username
       * @param $password
       */
    public function __construct($type,$host,$dbname,$username,$password){
  
      $this->type = $type;
      $this->dbname = $dbname;
      $this->host = $host;
      $this->username = $username;
      $this->password = $password;
  
    }
  
      /**
       * Va créer une connection à la base de donnée.
       * Si la connection est déjà établit, inutile d'en établir
       * une nouvelle pour éviter de potentielles fuites mémoires
       * C'est pour cette raison qu'on vérifie avec le if contenu dans
       * le try si nous avons déjà établit une connection
       *
       * @return PDO    une connection vers notre bdd
       */
    public function getmybdd(){
      try {
        if ($this->bdd ===null){
            $this->bdd = new PDO($this->type.':host='.$this->host.';dbname='.$this->dbname.'',$this->username, $this->password);
        }
      } catch (PDOException $e) {
        print "Erreur ! Connection à la base de donné impossible".$e->getMessage()." <br/>";
        die();
      }
      return $this->bdd;
    }
  
      /**
       * permet de renvoyer toutes les lignes d'une table données.
       * @param $myTable
       */
    public function getAllRow($myTable){
      foreach($this->bdd->query('SELECT * FROM '. $myTable) as $row) {
        print_r($row);
      }
    }
  
      /**
       * Fonction qui va permettre d'insérer dans
       * la table intervenants les informations transmises par
       * le formulaire traité dans index.php
       * @param $nom
       * @param $prenom
       * @param $adress
       * @param $age
       * @return bool
       */
    public function setInsert($nom, $prenom, $adress, $age){
        $query="INSERT INTO intervenants (" . "nom, prenom, adresse, age ".") VALUES (" . "'".$nom . "',". "'".$prenom . "'," ."'".$adress . "'," . "'".$age . "')";
        // pour comprendre à quoi sert une requête préparé et son execution : http://php.net/manual/fr/pdo.prepared-statements.php
        $req = $this->bdd->prepare($query);
        echo $query;
        $req->execute();
        return true;
    }
  
      /**
       * Cette fonction permet de supprimer un enregistrement
       * de la table indiqué =>$tableBDD il faut ensuite indiquer
       * par rapport à quel critère on doit supprimer cette ligne
       * dans l'exemple fourni j'ai un intervenant qui à pour nom Roger
       * et dans ce cas je désire que tous les intervenants qui s'appellent
       * Roger soit supprimer de la table intervenants
       * @param $tableBDD   => intervenant qui est une des tables de ma base de données personne
       * @param $columnBDD  =>nom (nom de la colonne de ma table
       * @param $value   => 'roger'
       * @return bool
       */
    public function deleteRow($tableBDD,$columnBDD,$value){
      $query = "DELETE FROM ".$tableBDD." WHERE ".$columnBDD." LIKE "."'".$value."'";
      var_dump($query);
      $req = $this->bdd->prepare($query);
      $req->execute();
      return true;
    }
  }
  class Login {
    
  }
?>


La validité des informations saisies est vérifiée :
Le mail doit être un mail valide
Le mot de passe doit faire au minimum 8 caractères

Si les identifiants sont bons, l’id de l’utilisateur est stocké dans une variable de session nommé « user_id »

Si les identifiants sont incorrects, le message suivant s’affiche : « Email ou mot de passe invalide »