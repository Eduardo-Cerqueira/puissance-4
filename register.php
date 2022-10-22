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
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/register-login.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Inscription</title>
</head>

<body>
    <header id="myaccountheader">
        <?php
        include './assets/php/view/header.inc.php'

        ?>
        <div class="titles">
            <h1>Inscription</h1>
        </div>
    </header>
    <div class="login">
        <h2>Veuillez entrer vos informations : </h2>
        <input type="text" placeholder="Email" />
        <input type="text" placeholder="Pseudo" />
        <input type="text" placeholder="Mot de passe" />
        <input type="text" placeholder="Confirmez le mot de passe" />
        <input type="button" value="Inscription" />
    </div>

    <?php 
    include './assets/php/view/footer.inc.php';
    ?>
    
</body>

</html>