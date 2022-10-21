<?php
error_reporting(0);
$_SESSION['username'] = 'quentin dupont';
for ($a=1;$a < 3;$a++) {
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    $sql = $pdo->query("SELECT * FROM Message WHERE player_id = '1' and id = ".$a);
    $row = $sql->fetch()
?>
<div class="sav-msg">
    <p class="sav-name"><?php echo($row['username'])?></p>
    <p class="msg sav"><?php echo($row['message'])?></p>
    <p class="date-msg"><?php echo($row['game_time']);?></p>
</div>
<?php
}
?>