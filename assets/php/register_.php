<?php

function register($bdd) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = $_POST["username"];
          $email = $_POST["email"];
          $password = $_POST["password"];
          $confirmPassword = $_POST["confirmpass"];
          $good_user = 0;
          if (filter_var($email, FILTER_VALIDATE_EMAIL) ? "true" : "false" == "true"){$good_user+=1;}
          if (strlen($username)>3/*à changer*/){$good_user+=1;}
          if (strlen($password)>7/*à changer*/){$good_user+=1;}
          if (preg_match('`[0-9]`',$password)>0){$good_user+=1;}
          if (preg_match('`[A-Z]`',$password)>0){$good_user+=1;}
          if (preg_match('/[^a-zA-Z\d]/',$password)>0){$good_user+=1;}
          if ($good_user == 6 && $password == $confirmPassword) {
          $query = 'INSERT INTO Users (username, password, email) VALUES ('.$username.','.$email.', SHA2('.$password.',256),'.$username;
          $req = $bdd->prepare($query);
          $req->execute();
        }
      }
    }

?>