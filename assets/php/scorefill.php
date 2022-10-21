<?php
function getAllScoreFromUser($username,$num){
   $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
   foreach($pdo->query('SELECT game_name, username, game_difficulty, score, game_time FROM Score 
   INNER JOIN Users ON Score.player_id=Users.id 
   INNER JOIN Game ON Score.game_id=Game.id 
   WHERE username = '."'".$username."'") as $row) {
    echo($row[$num]);}
    }

function getRowSelect($username){
    $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
    foreach($pdo->query('SELECT COUNT (Score.id) FROM Score 
    INNER JOIN Users
    ON Score.player_id=Users.id
    WHERE username = '."'".$username."'") as $number) {
        echo($number[0]);}
}

getAllScoreFromUser("quentin dupont",0);

function createScore($username) {
    $a = 1;
    while($a < getRowSelect($username)) {
        getAllScoreFromUser($username,0);
        getAllScoreFromUser($username,1);
        getAllScoreFromUser($username,2);
        getAllScoreFromUser($username,3);
        getAllScoreFromUser($username,4);
        $a+=$a;
        "<br>";
    }
}
createScore("quentin dupont")
?>