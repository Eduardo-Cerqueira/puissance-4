<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Connexion</title>
</head>

<body>
    <header id="myaccountheader">
        <?php
        include './assets/php/view/header.inc.php'

        ?>
        <div class="titles">
            <h1>Connexion</h1>
        </div>
    </header>
    <div class="login">
        <h2>Veuillez entrer vos informations : </h2>

        <form action="" method="post">

            <input type="mail" name="mail" placeholder="Email" />
    
            <input type="password" name="password" placeholder="Mot de passe" />
    
            <input type="button" value="Connexion" />

        </form>
    </div>

    <?php 
    include './assets/php/view/footer.inc.php';
    ?>

</body>

</html>