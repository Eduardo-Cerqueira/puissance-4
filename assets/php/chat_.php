<?php
error_reporting(0);

function CountMaxMessage(){
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    $sql = $pdo->query('SELECT COUNT(id) FROM Message');
    $row = $sql->fetch();
}
for ($a = 60;$a > 0;$a--) {
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    $sql = $pdo->query("SELECT * FROM Message WHERE player_id = ".$_SESSION['player_id']." and id = ".$a);
    $row = $sql->fetch();

    if (!empty($row)){
        $sql = $pdo->query("SELECT * FROM Message WHERE id = ".$a);
        $row = $sql->fetch();
?>
<div class="sav-msg">
    <p class="sav-name"><?php echo($row['username'])?></p>
    <p class="msg sav"><?php echo($row['message'])?></p>
    <p class="date-msg"><?php echo($row['game_time']);?></p>
</div>
<?php
    }
}

function getMessageAllInfo(){
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    $query = ('INSERT INTO Message (player_id,game_id,message) VALUES ('.($_SESSION["player_id"]).','.($_SESSION["game_id"]).',"'.($_POST["message"]).'")');
    $req = $pdo->prepare($query);
    $req->execute();
}

if (isset($_POST['submit']) && !empty($_POST['message'])) {
    getMessageAllInfo();
}
?>
