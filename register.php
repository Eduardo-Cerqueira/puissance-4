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

<body>
    <header id="myaccountheader">
        <?php include './assets/php/view/header.inc.php' ?>
        <div class="titles">
            <h1>Inscription</h1>
        </div>
    </header>
    <div class="login">

        <form class="loginin" action="register.php" method="post">
            <h2>Veuillez entrer vos informations : </h2><br>
            <?php require 'assets/php/register_.php'; register(); ?>
            <p>
                <label for="inputUsername">Username:<sup><br></sup></label>
                <input type="text" name="username" id="inputUsername">
            </p><br>
            <p>
                <label for="inputMail">Email:<sup><br></sup></label>
                <input type="text" name="mail" id="inputMail">
            </p><br>
            <p>
                <label for="inputPass">Mot de passe:<sup><br></sup></label>
                    <input type="password" name="pass" id="password">
                <div class="progress">
                    <div class ="bar"></div>
                </div>
                <script src="./assets/js/register.js"></script>
            </p><br>
            <p>
                <label for="inputConfirmPass">Confirmer le mot de passe:<sup><br></sup></label>
                <input type="password" name="confirmpass" id="inputConfirmPass">
            </p><br>
            <input class="button-submit-reset" type="submit" value="Send">
            <input class="button-submit-reset" type="reset" value="Reset">
        </form>
    </div>
    <?php include './assets/php/view/footer.inc.php'; ?>
</body>

</html>