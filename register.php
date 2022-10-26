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

<?php require "assets/php/includes/database.inc.php"; require "assets/php/register_.php"; $bdd = new database(); ?>

<body>
    <header id="myaccountheader">
        <?php include './assets/php/view/header.inc.php' ?>
        <div class="titles">
            <h1>Inscription</h1>
        </div>
    </header>
    <div class="login">
        <form action="register.php" method="post">
            <h2>Veuillez entrer vos informations : </h2>
            <style type="text/css">
                .error {
                    color: red;
                }

                .success {
                    color: green;
                }
            </style>
            <p>
                <input type="text" name="username" id="inputUsername" placeholder="Username">
            </p>
            <p>
                <input type="text" name="mail" id="inputMail" placeholder="Email">
            </p>
            <p>
                <input type="text" name="pass" id="inputPass" placeholder="Mot de passe">
            </p>
            <p>
                <input type="text" name="confirmpass" id="inputConfirmPass" placeholder="Confirmer le mot de passe">
            </p>
            <?php 
            $bdd = $bdd->connectBdd();
            register($bdd);
            ?>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </form>
    </div>
    <?php include './assets/php/view/footer.inc.php'; ?>
</body>

</html>