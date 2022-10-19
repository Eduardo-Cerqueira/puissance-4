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

    <?php 
    include './assets/php/view/footer.inc.php';
    ?>
    
</body>

</html>