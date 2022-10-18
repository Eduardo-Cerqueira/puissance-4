<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Document</title>
</head>

<body>

    <header>
        <?php
        include './assets/php/view/header.inc.php'
        
        ?>

        <div class="titles">
            <h1>Nous contacter</h1>
            <h2>Toujours là pour vous servir</h2>
        </div>
    </header>

    <section>

        <section class="info">

            <div class="card">
                <div>
                    <img class="svg-coord" src="assets/images/tel.svg" alt="">
                </div>
                <p>06 05 04 03 02</p>
            </div>

            <div class="card">
                <div>
                    <img class="svg-coord" src="assets/images/email-svgrepo-com.svg" alt="">
                </div>
                <p>support@powerofmemory.com</p>
            </div>

            <div class="card">
                <div>
                    <img class="svg-coord" src="assets/images/loc.svg" alt="">
                </div>
                <p>paris</p>
            </div>

        </section>

        <form action="">

            <input class="perso" type="text" placeholder="Nom" id="nom">
            <input class="perso" type="mail" placeholder="Mail" id="">
            <input type="text" placeholder="Sujet" id="">
            <input type="textarea" placeholder="Message" id="">
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
                <a class="media-link" href="#"><img src="/assets/img/icons8-facebook-nouveau.svg" alt=""></a>
                <a class="media-link" href="#"> <img src="/assets/img/icons8-twitter.svg" alt=""></a>
                <a class="media-link" href="#"> <img src="/assets/img/icons8-logo-google.svg" alt=""></a>
                <a class="media-link" href="#"><img src="/assets/img/pinterest-2.svg" alt=""></a>
                <a class="media-link" href="#"> <img src="/assets/img/icons8-instagram.svg" alt=""></a>
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