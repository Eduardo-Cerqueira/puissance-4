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

require "assets/php/database.inc.php"; 
$bdd = new Request("mysql","localhost","puissance4","root","");
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
            <p>
                <label for="inputMail">Email:<sup>*</sup></label>
                <input type="text" name="mail" id="inputMail" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>
            </p>
            <?php 
            $bdd->register();
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