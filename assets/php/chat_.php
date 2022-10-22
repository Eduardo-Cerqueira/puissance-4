<?php
error_reporting(0);
for ($a=1;$a < 3;$a++) {
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    $sql = $pdo->query("SELECT * FROM Message WHERE player_id = ".$_SESSION[player_id]." and id = ".$a);
    $row = $sql->fetch()
?>
<div class="sav-msg">
    <p class="sav-name"><?php echo($row['username'])?></p>
    <p class="msg sav"><?php echo($row['message'])?></p>
    <p class="date-msg"><?php echo($row['game_time']);?></p>
</div>
<?php
}

function getMessageAllInfo(){
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    $query = ('INSERT INTO Message (player_id,message) VALUES ("'.$_SESSION["player_id"].'","'.$SESSION[game_id].'","'.$_POST["message"].'")');
    $req = $pdo->prepare($query);
    $req->execute();
}

function addMessage() {
    if (isset($_POST['submit']) && !empty($_POST['message'])) {
        getMessageAllInfo();
    }
}
?>
