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
            <form class = "form-signin" role = "form" method = "post">
                <input type="text" name="message" placeholder="Rentrer votre message ..." >
                <button type="submit" name = "submit">Envoyer</button>
            </form>
        </div>
    </section>
<?php
}
?>