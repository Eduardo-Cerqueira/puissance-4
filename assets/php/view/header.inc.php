<nav>
    <p id="logo">The Power Of Memory</p>

    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="memory.php">Jeu</a></li>
        <li><a href="score.php">Scores</a></li>
        <li><a href="contact.php">Nous contacter</a></li>
        <li><a href="myaccount.php">Mon compte</a></li>
        <?php if (empty($_SESSION["valid"])) { ?>
        <li><a href="login.php">Log In</a></li>
        <li><a href="register.php">Register</a></li>
        <?php } ?>
        <?php if (!empty($_SESSION["valid"])) { ?>
        <form class="form-signin" role="form" action="assets/php/logout.php" method="post">
            <button class="button-header" type="submit" name="logout">Logout</button>
        </form>
        <?php } ?>
    </ul>
</nav>