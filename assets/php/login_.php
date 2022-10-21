<?php

function getUserAllInfo($username_email,$password,$num){
   $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
   foreach($pdo->query('SELECT * FROM Users WHERE username = "'.$username_email.'" or email = "'.$username_email.'" and password = SHA2('.$password.',256)') as $row) {
     return($row[$num]);
   }
}

function loginuser(){

   $password = ($_POST['password']);

if (isset($_POST['login']) && !empty($_POST['username']) && strlen($password) >= 8) {
   $username_email = ($_POST['username']);
   $password = ($_POST['password']);
   $hashpassword = hash('sha256', $password);
   
   $dbusername = getUserAllInfo($username_email,$password,1);
   $dbpassword = getUserAllInfo($username_email,$password,2);
   $dbemail = getUserAllInfo($username_email,$password,3);
   $player_id = getUserAllInfo($username_email,$password,0)
   
   if ($hashpassword == $dbpassword) {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['user_id'] = $dbusername;
      $_SESSION['email'] = $dbemail;
      $_SESSION['player_id'] = $player_id

      $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
      $query = 'UPDATE Users SET last_connection = NOW() WHERE username = '."'".$dbusername."'";
      $req = $pdo->prepare($query);
      $req->execute();
      
      echo 'You have entered valid use name and password';
   } else {
      echo 'Email ou mot de passe invalide';
   }
}
else if (strlen($password) < 8) {
   echo 'Mot de passe trop court';
}
}

//add line sql to last_connection
?>