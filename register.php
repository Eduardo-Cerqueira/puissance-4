<?php session_start(); ?>
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
<?php

require "assets/php/includes/database.inc.php"; 
require "assets/php/register_.php"; 
$bdd = new database();
?>
<body>
    <header id="myaccountheader">
        <nav>
            <p id="logo">The Power Of Memory</p>

            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="memory.html">Jeu</a></li>
                <li><a href="score.html">Scores</a></li>
                <li><a href="contact-page.html">Nous contacter</a></li>
                <li><a href="myaccount.html">Mon compte</a></li>
            </ul>
        </nav>
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
                <label for="inputPass">Mot de passe:<sup>*</sup></label>
                <input type="text" name="pass" id="inputPass" value="<?php echo $password; ?>">
                <span class="error"><?php echo $passwordErr; ?></span>
            </p>
            <p>
                <label for="inputConfirmPass">Confirmer le mot de passe:<sup>*</sup></label>
                <input type="text" name="confirmpass" id="inputConfirmPass" value="<?php echo $confirm; ?>">
                <span class="error"><?php echo $confirmErr; ?></span>
            </p>
            <?php 
            $bdd = $bdd->connectBdd();
            register($bdd);
            ?>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </form>
    </div>
    <footer>
        <div class="informations">
            <p class="footer-title">Information</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt officia tempora</p>

            <div class="coord">
                <p class="coord-name">Email:</p>
                <p>monmail@gmail.com</p>
            </div>
            <div class="coord">
                <p class="coord-name">Tel:</p>
                <p>07 50 23 20 23</p>
            </div>
            <div class="coord">
                <p class="coord-name">Location:</p>
                <p>Panam</p>
            </div>

            <div class="media-links">
                <a class="media-link" href="#"><img src="assets/images/icons8-facebook-nouveau.svg" alt=""></a>
                <a class="media-link" href="#"> <img src="assets/images/icons8-twitter.svg" alt=""></a>
                <a class="media-link" href="#"> <img src="assets/images/icons8-logo-google.svg" alt=""></a>
                <a class="media-link" href="#"><img src="assets/images/pinterest-2.svg" alt=""></a>
                <a class="media-link" href="#"> <img src="assets/images/icons8-instagram.svg" alt=""></a>
            </div>

            <p id="copyright">© 2022 Coding Factory Made with ❤️</p>
        </div>

        <div class="footer-nav">
            <p class="footer-title">Power Of Memory</p>
            <ul>
                <li>Jouer !</li>
                <li>Les scores</li>
                <li>Nous contacter</li>
            </ul>
        </div>
    </footer>
</body>

</html>