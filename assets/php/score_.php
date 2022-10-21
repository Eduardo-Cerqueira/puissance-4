<?php
error_reporting(0);
$_SESSION['username'] = 'quentin dupont';
for ($a=1;$a < 10;$a++) {
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    $sql = $pdo->query("SELECT * FROM Score INNER JOIN Users ON Score.player_id = Users.id INNER JOIN Game ON Score.game_id = Game.id WHERE username = "."'".$_SESSION['username']."'"." and Score.id = ".$a);
    $row = $sql->fetch()

?>
<tr>
<td><?php echo($row['game_name']);?></td>
<td><?php echo($row['username']);?></td>
<td><?php echo($row['game_difficulty']);?></td>
<td><?php echo($row['score']);?></td>
<td><?php echo($row['game_time']);?></td>   
</tr>
<?php
}
?>