<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/myaccount.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <header id="myaccountheader">
        <nav>
            <p id="logo">The Power Of Memory</p>

            <ul>
            <li><a href="index.php">Accueil</a></li>
                <li><a href="memory.php">Jeu</a></li>
                <li><a href="score.php">Scores</a></li>
                <li><a href="contact.php">Nous contacter</a></li>
                <li><a href="myaccount.php">Mon compte</a></li>
            </ul>
        </nav>
        <div class="titles">
            <h1>Mon Espace</h1>
            <h2>Ici vous pouvez changer votre mot de passe ou mail</h2>
        </div>
    </header>

    <section id="formulaire">

        <form action="">
            <p>monmail@gmail.com</p>
            <label for="mail">Nouvelle adresse mail</label>
            <input type="text" name="mail" id="" class="champs">
            <label for="password">Password</label>
            <input type="password" name="password" id="" class="champs">
            <label for="confirm-password">Confirmer</label>
            <input type="password" name="confirm-password" id="" class="champs">
            <input type="submit" value="Envoyer">
        </form>
        <img src="assets/images/game-controller-gamepad-svgrepo-com.svg" alt="game controller" id="game-controller">
        <form action="">
            <label for="old-password">Ancien password</label>
            <input type="password" name="old-password" id="" class="champs">
            <label for="password">Nouveau password</label>
            <input type="password" name="password" id="" class="champs">
            <label for="confirm-password">Confirmer</label>
            <input type="password" name="confirm-password" id="" class="champs">
            <input type="submit" value="Envoyer">
        </form>

    </section>


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