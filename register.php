<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

require "./assets/php/includes/database.inc.php"; 
require "./assets/php/register_.php"; 
$bdd = new database();
?>


<body>
    <header id="myaccountheader">
        <?php include './assets/php/view/header.inc.php' ?>
        <div class="titles">
            <h1>Inscription</h1>
        </div>
    </header>
    <div class="login">

        <form action="register.php"method="post">
            <h2>Veuillez entrer vos informations : </h2>
            <style type="text/css">
                .error{ color: red; }
                .success{ color: green; }
            </style>
            <p>
                <label for="inputUsername">Username:<sup>*</sup></label>
                <input type="text" name="username" id="inputUsername" value="<?php echo $username; ?>">
                <span class="error"><?php echo $username; ?></span>
            </p>
            <p>
                <label for="inputMail">Email:<sup>*</sup></label>
                <input type="text" name="mail" id="inputMail" value="<?php echo $mail; ?>">
                <span class="error"><?php echo $mailErr; ?></span>
            </p>
            <p>
            <div class="password-checker">
                <div class="input-group">
                    <input type="text" id="password" placeholder="Mot de passe...">
                </div>
                <div class="progress">
                    <div class ="bar"></div>
                </div>
                <script src="./assets/js/register.js"></script>
                
            
            </p>
            <p>
                <label for="inputConfirmPass">Confirmer le mot de passe:<sup>*</sup></label>
                <input type="text" name="confirmpass" id="inputConfirmPass" value="<?php echo $confirm; ?>">
                <span class="error"><?php echo $confirmErr; ?></span>
            </p>
            <?php 

        <?php
            require "assets/php/register_.php";

            $bdd = $bdd->connectBdd();
            register($bdd);
        ?>
        <form action="register.php" method="post">
            <h2>Veuillez entrer vos informations : </h2>
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="password" name="confirmpass" placeholder="Confirmer le mot de passe">
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </form>
    </div>
    <?php include './assets/php/view/footer.inc.php'; ?>
</body>
</html>