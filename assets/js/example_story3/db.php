<?php

$pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
$sql = $pdo->query("SELECT * FROM Score INNER JOIN Users ON Score.player_id = Users.id INNER JOIN Game ON Score.game_id = Game.id WHERE username = "."'".$_SESSION['username']."'"." and Score.id = ".$a);
$row = $sql->fetch();

$game_finished = true; 

if($game_finished == true) {
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    $query = "INSERT INTO Score (player_id ,game_id , game_difficulty, score) VALUES (".$_SESSION['player_id'].",".$_SESSION['game_id'].",".$_SESSION['game_difficulty'].",".$_SESSION['score'].") ON DUPLICATE KEY UPDATE Score=".$_SESSION['score']."";
    $req = $pdo->prepare($query);
    $req->execute();
?>