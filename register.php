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
        <input type="password" placeholder="Mot de passe" />
        
        <progress id="file" max="100" value="70"> 70% </progress>
        
        <input type="password" placeholder="Confirmez le mot de passe" />
        <input type="button" value="Inscription" />
    </div>

    <?php 
    include './assets/php/view/footer.inc.php';
    ?>
    
</body>

</html>