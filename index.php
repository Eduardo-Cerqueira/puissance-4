<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/chat.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>

    <header>
        <?php
        include './assets/php/view/header.inc.php'

        ?>
        <div class="titles">
            <h1>Bienvenue dans <br> notre studio !</h1>
            <h2>Venez challenger les cerveaux les plus agiles !</h2>
            <input type="button" value="JOUER !">
        </div>
    </header>
    <section id="paragraphs">
        <section class="slogan">
            <div class="image">
                <img src="assets/images/pc.jpg" alt="pc image">
            </div>
            <div class="paragraph">
                <p class=shiffres>01</p>
                <div class="text">
                    <p class="para-title">Titleeeeeee</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In ipsum reprehenderit eveniet
                        molestiae voluptatem sapiente fuga doloremque blanditiis, debitis earum aspernatur maiores
                        quia
                        aliquam ratione dignissimos hic asperiores iste animi.</p>
                </div>
            </div>
        </section>
        <section class="slogan little">
            <div class="image">
                <img src="assets/images/dab.jpg" alt="dab image">
            </div>
            <div class="paragraph">
                <p class=shiffres>02</p>
                <div class="text">
                    <p class="para-title">Titleeeeeee</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In ipsum reprehenderit eveniet
                        molestiae voluptatem sapiente fuga doloremque blanditiis, debitis earum aspernatur maiores
                        quia
                        aliquam ratione dignissimos hic asperiores iste animi.</p>
                </div>
            </div>
        </section>
        <section class="slogan little">
            <div class="image">
                <img src="assets/images/poker.jpg" alt="poker image">
            </div>
            <div class="paragraph">
                <p class=shiffres>03</p>
                <div class="text">
                    <p class="para-title">Titleeeeeee</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In ipsum reprehenderit eveniet
                        molestiae voluptatem sapiente fuga doloremque blanditiis, debitis earum aspernatur maiores
                        quia
                        aliquam ratione dignissimos hic asperiores iste animi.</p>
                </div>
            </div>
        </section>
        </div>
    </section>

    <section class="stats">

        <img id="wd" src="assets/images/wd.jpg" alt="wd image">

        <section class="stat">
            <div class="statistique" id="partie">
                <p class="stat-number">310</p>
                <p class="stat-desc"> Parties jouées</p>
            </div>
            <div class="statistique" id="joueurs1">
                <p class="stat-number">1020 </p>
                <p class="stat-desc"> joueurs </p>
            </div>
            <div class="statistique" id="time">
                <p class="stat-number">10 sec </p>
                <p class="stat-desc">Temps record</p>
            </div>
            <div class="statistique" id="joueurs">
                <p class="stat-number">21300 </p>
                <p class="stat-desc">joueurs inscrits</p>
            </div>
        </section>

    </section>

    <section>
        <div class="team-title">
            <p id="team">Notre Equipe ( ͡° ͜ʖ ͡°)</p>
            <p id="team-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque aliquid</p>
            <img src="assets/img/159926.svg" alt="">
        </div>
        <div class="team-card">
            <div class="card">
                <img src="assets/images/1209874.jpeg" alt="" class="team-head">
                <p class="team-name">
                    Anthony
                </p>
                <p class="team-job">Dev Full-Stack</p>
                <div class="socials">
                    <img src="assets/images/icons8-facebook-nouveau.svg" alt="facebook logo">
                    <img src="assets/images/icons8-twitter.svg" alt="twitter logo">
                    <img src="assets/images/pinterest-2.svg" alt="pinterest logo">
                </div>
            </div>
            <div class="card">
                <img src="assets/images/maxresdefault.jpeg" alt="" class="team-head">
                <p class="team-name">
                    Eduardo
                </p>
                <p class="team-job">Git Manager</p>
                <div class="socials">
                    <img src="assets/images/icons8-facebook-nouveau.svg" alt="facebook logo">
                    <img src="assets/images/icons8-twitter.svg" alt="twitter logo">
                    <img src="assets/images/pinterest-2.svg" alt="pinterest logo">
                </div>
            </div>
            <div class="card">
                <img src="assets/images/keqing.jpg" alt="" class="team-head">
                <p class="team-name">
                    Ben Youcef
                </p>
                <p class="team-job">Weeb 2.0</p>
                <div class="socials">
                    <img src="assets/images/icons8-facebook-nouveau.svg" alt="facebook logo">
                    <img src="assets/images/icons8-twitter.svg" alt="twitter logo">
                    <img src="assets/images/pinterest-2.svg" alt="pinterest logo">
                </div>
            </div>
            <div class="card">
                <img src="assets/images/albedo.jpeg" alt="" class="team-head">
                <p class="team-name">
                    Luicas
                </p>
                <p class="team-job">Dev Full-Stack</p>
                <div class="socials">
                    <img src="assets/images/icons8-facebook-nouveau.svg" alt="facebook logo">
                    <img src="assets/images/icons8-twitter.svg" alt="twitter logo">
                    <img src="assets/images/pinterest-2.svg" alt="pinterest logo">
                </div>
            </div>
        </div>
    </section>

    <section id="chat">
        <div class="hchat">
            <img id="robot" src="assets/images/Feb.webp" alt="image robot">
            <p>Chat général</p>
        </div>
        <div class="chat-body">
            <div class="user-msg">
                <p class="user-name" id="me">Moi</p>
                <p class="msg user" id="hello">Hello</p>
                <p class="date-msg">Aujourd'hui à 14h32</p>
            </div>
            <div class="sav-msg">
                <p class="sav-name">Arthur</p>
                <p class="msg sav">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet iure fugit
                    exercitationem placeat voluptates ditate.</p>
                <p class="date-msg">Aujourd'hui à 14h32</p>
            </div>
            <div class="sav-msg">
                <p class="sav-name">Arthur</p>
                <p class="msg sav">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet iure fugit
                    exercitationem placeat voluptates ditate.</p>
                <p class="date-msg">Aujourd'hui à 14h32</p>
            </div>
            <div class="user-msg">
                <p class="user-name">Moi</p>
                <p class="msg user">Comment ça va ?</p>
                <p class="date-msg">Aujourd'hui à 14h33</p>
            </div>
            <div class="sav-msg">
                <p class="sav-name">Arthur</p>
                <p class="msg sav">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet iure fugit
                    exercitationem placeat voluptates ditate.</p>
                <p class="date-msg">Aujourd'hui à 14h32</p>
            </div>
            <div class="sav-msg">
                <p class="sav-name">Arthur</p>
                <p class="msg sav">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet iure fugit
                    exercitationem placeat voluptates ditate.</p>
                <p class="date-msg">Aujourd'hui à 14h32</p>
            </div>
        </div>
        <div class="chat-footer">
            <form action="">
                <input type="text" placeholder="Rentrer votre message ...">
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </section>

    <?php 
    include './assets/php/view/footer.inc.php';
    ?>


</body>

</html>