<?php session_start(); ?>
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
        include 'assets/php/view/header.inc.php';
        ?>
        <div class="titles">
            <h1>Connexion</h1>
        </div>
    </header>
    <div class="login">
        <h2>Veuillez entrer vos informations : </h2>
        <?php include 'assets/php/login_.php'; loginuser();?>
        <form class="form-signin" role="form" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="post">
            <input type="text" class="form-control" name="username" placeholder="Username / Email" required />
            <input type="password" class="form-control" name="password" placeholder="Password" required><br><br>
            <button class="button" type="submit" name="login">Login</button>
        </form>
    </div>

    <?php 
    include 'assets/php/view/footer.inc.php';
    ?>

</body>

</html>