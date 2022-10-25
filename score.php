<?php session_start(); 
include 'assets/php/login_.php';
isLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/score.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <header>
        <?php
        include './assets/php/view/header.inc.php'

        ?>
        <div class="titles">
            <h1>Score</h1>
            <h2>Venez challenger les cerveaux les plus agiles !</h2>

        </div>
    </header>
    <div class="stats">
        <table id="table">
            <tr>
                <th>Nom du jeu</th>
                <th>Pseudo du joueur</th>
                <th>Niveau de difficulté de la partie jouée</th>
                <th>Score du joueur</th>
                <th>Date et heure de la partie</th>
            </tr>
            <?php include 'assets/php/score_.php' ?>
        </table>
    </div>

    <?php 
    include './assets/php/view/footer.inc.php';
    ?>
    
</body>

</html>