<footer id="footer">
    <section class="part_left">
        <h2>CONTACT</h2>
        <form method="POST">
            <input type="text" name="nom" placeholder="Nom" class="input_name" title="Utilisez des lettres seulement"/>
            <input type="email" name="mail" placeholder="Email" class="input_mail"/>
            <textarea name="message" placeholder="Message" class="message"></textarea>
            <button name="btn" type="submit" id="footer_btn"><i class="fas fa-paper-plane"></i>Envoyer</button>
        </form>
    </section>

    <section class="part_right">    
        <article class="footer_menu">
            <h3>MENU</h3>
            <ul>
                <li>Parcours</li>
                <li>Actualités</li>
                <li>Contact</li>
                <li>Sponsors</li>
            </ul>
        </article>
        <article class="footer_sponsors">
            <h3>SPONSORS</h3>
            <ul>
                <li>OnlineFormapro</li>
                <li>Villages FM</li>
            </ul>
        </article>
        <article class="footer_others">
            <ul>
                <li><i class="fab fa-facebook"></i><i class="fab fa-instagram-square"></i></li>
                <li>Mentions légales</li>
                <li>© ACS 2021.</li>
            </ul>
        </article>
    </section>
</footer>

<?php wp_footer(); ?>

</body>
</html>