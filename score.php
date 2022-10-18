<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/score.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <header>
        <?php
        include './assets/php/view/header.inc.php'

        ?>gi
        <div class="titles">
            <h1>Score</h1>
            <h2>Venez challenger les cerveaux les plus agiles !</h2>

        </div>
    </header>
    <div class="stats">
        <div class="card">
            <table id="table">
                <tr>
                    <th>Nom du jeu</th>
                    <th>Pseudo du joueur</th>
                    <th>Niveau de difficulté de la partie jouée</th>
                    <th>Score du joueur</th>
                    <th>Date et heure de la partie</th>
                </tr>
                <tr>
                    <td>Game1</td>
                    <td>Pseudo</td>
                    <td>Level 2</td>
                    <td>10</td>
                    <td>06/10/2022 | 15:00:00</td>
                </tr>
                <tr>
                    <td>Game2
                    </td>
                    <td>Pseudo</td>
                    <td>Level 2</td>
                    <td>10</td>
                    <td>06/10/2022 | 15:00:00</td>
                </tr>
                <tr>
                    <td>Game3</td>
                    <td>Pseudo</td>
                    <td>Level 2</td>
                    <td>12</td>
                    <td>06/10/2022 | 15:00:00</td>
                </tr>
                <tr>
                    <td>Game4</td>
                    <td>Pseudo</td>
                    <td>Level 2</td>
                    <td>11</td>
                    <td>06/10/2022 | 15:00:00</td>
                </tr>
                <tr>
                    <td>Game5</td>
                    <td>Pseudo</td>
                    <td>Level 1</td>
                    <td>19</td>
                    <td>06/10/2022 | 15:00:00</td>
                </tr>
            </table>
        </div>
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