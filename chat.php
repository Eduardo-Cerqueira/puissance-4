<?php
if (isset($_SESSION['valid'])) {
?>
<section id="chat">
        <div class="hchat">
            <img id="robot" src="assets/images/Feb.webp" alt="image robot">
            <p>Chat général</p>
        </div>
        <div class="chat-body">
            <?php include 'assets/php/chat_.php'; ?>
        </div>
        <div class="chat-footer">
        <?php addMessage(); ?>
            <form class = "form-signin" role = "form" method = "post">
                <input type="text" name="message" placeholder="Rentrer votre message ...">
                <input type="submit" name="submit" value="Envoyer">
            </form>
        </div>
    </section>
<?php
}
?>