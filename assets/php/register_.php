<?php

function register() {
  $bdd = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $mail = $_POST["mail"];
      $password = $_POST["pass"];
      $confirmPassword = $_POST["confirmpass"];
      $username = $_POST["username"];
      $good_user = 0;
      if (filter_var($mail, FILTER_VALIDATE_EMAIL) ? "true" : "false" == "true"){$good_user+=1;}
      if (strlen($username)>3/*à changer*/){$good_user+=1;}
      if (strlen($password)>7/*à changer*/){$good_user+=1;}
      if (preg_match('`[0-9]`',$password)>0){$good_user+=1;}
      if (preg_match('`[A-Z]`',$password)>0){$good_user+=1;}
      if (preg_match('/[^a-zA-Z\d]/',$password)>0){$good_user+=1;}
      if ($good_user == 6 && $password == $confirmPassword) {
      $query = 'INSERT INTO Users (email, username, password) VALUES ("'.$mail.'", "'.$username.'",SHA2("'.$password.'",256))';
      $req = $bdd->prepare($query);
      $req->execute();
      }
  }
}

?>