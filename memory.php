<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/memory.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Jeu</title>
</head>

<body>

    <header id="myaccountheader">
        <?php
        include './assets/php/view/header.inc.php'
        ?>

        <div class="titles">
            <h1>Memory</h1>
        </div>
    </header>

    <label for="menu">Veuillez choisir la difficulté :</label>
    <select name="menu" id="menu">
        <option value="">Choisir</option>
        <option value="easy">Facile</option>
        <option value="medium">Moyen</option>
        <option value="hard">Difficile</option>
        <option value="impossible">Extrem</option>
    </select>

    <label for="theme">Veuillez choisir le thème :</label>
    <select name="theme" id="theme">
        <option value="">Choisir</option>
        <option value="waifu">waifu</option>
        <option value="waifu">waifu</option>
        <option value="waifu">waifu</option>
    </select>

    <button onclick="" id="button">Lancer la partie</button>


    
    <p id="chrono"></p>

    <div id="gril"></div>


    <div id="nilou"></div>



    <!-- <table>
        <tbody id="grid">
            <tr class="row">
                <td class="case"><img src="assets/images/Genshin-Impact-Candace-date-de-sortie-de-Nilou-et-capacites-1200x900.jpeg"></td>
            </tr>
        </tbody>
    </table> -->


    <?php
    include './assets/php/view/footer.inc.php';
    ?>

    <script src="/assets/js/script.js"></script>

</body>

</html>