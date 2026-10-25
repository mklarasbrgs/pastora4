<footer class="footer">
    <div class="footer-container">
        <section class="footer-col footer-about" aria-labelledby="footer-about-title">
            <a href="<?= BASE_URL ?>index.php" class="footer-logo-link">
                <img src="<?= BASE_URL ?>img/Logo Principal.png" alt="Pastoral de Rua Deus Vivo" class="footer-logo">
            </a>
            <h2 class="footer-title" id="footer-about-title">Acolher transforma vidas</h2>
            <p class="footer-description">
                Há 10 anos levando marmitas, água e acolhimento às pessoas em situação de rua em Guaratinguetá e Aparecida - SP.
            </p>
            <a class="footer-social" href="https://www.instagram.com/pastoraldeusvivo_gloria/" target="_blank" rel="noopener noreferrer">Instagram: @pastoraldeusvivo_gloria</a>
        </section>

        <nav class="footer-col" aria-label="Links do site">
            <h2 class="footer-title">Navegue pelo site</h2>
            <ul class="footer-links">
                <li><a href="<?= BASE_URL ?>index.php">Início</a></li>
                <li><a href="<?= BASE_URL ?>pages/doacao.php">Doação</a></li>
                <li><a href="<?= BASE_URL ?>pages/sobreNos.php">Sobre nós</a></li>
                <li><a href="<?= BASE_URL ?>pages/lgpd.php">Privacidade e LGPD</a></li>
                <li><a href="<?= BASE_URL ?>pages/login.php">Área restrita</a></li>
            </ul>
            <div class="footer-details">
                <p><strong>Paróquia:</strong> Nossa Senhora da Glória</p>
                <p><strong>Atendimento:</strong> Sextas-feiras, às 19h</p>
                <p><strong>WhatsApp:</strong> <a href="https://wa.me/5512997911364" target="_blank" rel="noopener noreferrer">(12) 99791-1364</a></p>
            </div>
        </nav>

        <section class="footer-col footer-contact" aria-labelledby="footer-contact-title">
            <h2 class="footer-title" id="footer-contact-title">Fale com a gente</h2>
            <p class="footer-contact-intro">Tem uma dúvida ou quer saber mais sobre nosso trabalho? Envie uma mensagem.</p>
            <form class="footer-form" id="footer-contact-form" data-recipient="EMAIL_DA_PASTORAL_AQUI">
                <label for="footer-name">Seu nome</label>
                <input id="footer-name" name="nome" type="text" placeholder="Como podemos te chamar?" required>

                <label for="footer-email">Seu e-mail</label>
                <input id="footer-email" name="email" type="email" placeholder="voce@exemplo.com" required>

                <label for="footer-message">Mensagem</label>
                <textarea id="footer-message" name="mensagem" rows="3" placeholder="Escreva sua mensagem..." required></textarea>

                <button type="submit" class="footer-submit">Preparar e-mail <span aria-hidden="true">→</span></button>
                <p class="footer-form-note">Ao enviar, seu aplicativo de e-mail será aberto para concluir o envio.</p>
            </form>
        </section>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> Pastoral de Rua Deus Vivo. Todos os direitos reservados.</p>
    </div>
</footer>
<script>
(() => {
    const form = document.getElementById('footer-contact-form');
    if (!form) return;

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const recipient = form.dataset.recipient;
        if (!recipient || recipient === 'EMAIL_DA_PASTORAL_AQUI') {
            alert('O formulário está pronto, mas falta configurar o e-mail oficial da Pastoral no arquivo include/footer.php.');
            return;
        }

        const nome = document.getElementById('footer-name').value.trim();
        const email = document.getElementById('footer-email').value.trim();
        const mensagem = document.getElementById('footer-message').value.trim();
        const subject = encodeURIComponent('Mensagem pelo site - Pastoral de Rua Deus Vivo');
        const body = encodeURIComponent(`Nome: ${nome}\nE-mail para resposta: ${email}\n\nMensagem:\n${mensagem}`);
        window.location.href = `mailto:${recipient}?subject=${subject}&body=${body}`;
    });
})();
</script>
