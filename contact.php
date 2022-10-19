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

    <?php 
    include './assets/php/view/footer.inc.php';
    ?>









</body>

</html>