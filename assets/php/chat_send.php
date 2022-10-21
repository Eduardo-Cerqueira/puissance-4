<?php
function getUserAllInfo(){
   $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
   foreach($pdo->query('INSERT INTO Message (player_id,message) VALUES ("'.$_SESSION["player_id"].", '".$_POST["message"]."')") as $row) {
     return($row);
   }
}

if (isset($_POST['submit']) && !empty($_POST['message']) {
    getUserAllInfo();
}
?>