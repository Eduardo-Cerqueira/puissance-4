<script scr="../js/script.js"><script>
<?php

$pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
$sql = $pdo->query("INSERT INTO Score (player_id ,game_id , game_difficulty, score) VALUES (".$_SESSION["player_id"]",".$_SESSION["game_id"]",".gamedifficulty().",".returnscore().")
ON DUPLICATE KEY UPDATE ".returnscore());
$row = $sql->fetch();
?>