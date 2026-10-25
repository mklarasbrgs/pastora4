<?php require_once __DIR__ . '/config/connection.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= BASE_URL ?>css/site.css?v=2">
</head>
<body>

    <?php include __DIR__ . '/include/header.php'; ?>


    <section class="header-imagem">
        <div class="header-info-box">
            <h1 class="header-title">Ajude-nos a ajudar<br>o mundo</h1>
            <p class="header-text">Há 10 anos levando marmita, água e acolhimento para pessoas em situação de rua em Guaratinguetá e Aparecida-SP.</p>
            <div class="header-buttons">
                <a href="<?= BASE_URL ?>pages/doacao.php" class="header-button-doacao">Fazer Doação</a>
                <a href="#sobre" class="header-button-historia">Conheça nossa história</a>
            </div>
        </div>
    </section>

    <section class="about" id="sobre">
        <div class="about-header">
            <span class="about-line"></span>
            <h2>Pastoral Deus Vivo</h2>
        </div>

        <div class="about-content">
            <div class="about-image">
                <img src="<?= BASE_URL ?>img/equipe-pastoral.jpeg" alt="Equipe Pastoral Deus Vivo">
            </div>

            <div class="about-text">
                <p>Somos uma pastoral filiada à paróquia Nossa Senhora da Glória, localizada em Guaratinguetá-SP, que entrega marmitas para pessoas em situação de vulnerabilidade. Nossa assistência ocorre todas as sextas-feiras a partir das 19h na região.</p>
                <p>O que começou com um pequeno grupo de amigos hoje mobiliza dezenas de voluntários, famílias parceiras e comerciantes que se uniram por um mesmo propósito: acolher com dignidade quem mais precisa.</p>
                <a href="<?= BASE_URL ?>pages/doacao.php" class="about-button">Fazer Doação</a>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="stats-header">
            <h2>São 10 anos de trabalho e dedicação</h2>
            <p>Números que traduzem uma década de dedicação da comunidade a quem mais precisa.</p>
        </div>

        <div class="stats-cards">
            <div class="stats-card">
                <div class="stats-icon">
                     <img src="<?= BASE_URL ?>/img/utensils-solid.png" alt=""> 
                </div>
                <h3>150+</h3>
                <p>Marmitas entregues toda semana</p>
            </div>

            <div class="stats-card">
                <div class="stats-icon">
                    <img src="<?= BASE_URL ?>img/clock-solid.png" alt="">
                </div>
                <h3>Sex 19h</h3>
                <p>Todas as sextas-feiras a partir das 19h</p>
            </div>

            <div class="stats-card">
                <div class="stats-icon">
                    <img src="<?= BASE_URL ?>img/hand-holding-heart-solid.png" alt="">
                </div>
                <h3>+300</h3>
                <p>Pessoas em situação de vulnerabilidade atendidas todos os meses</p>
            </div>
        </div>
    </section>

    <section class="video" id="video">
        <div class="video-box">
            <span class="video-line"></span>
            <h2>Participação na TV Aparecida</h2>
        </div>

        <div class="video-text">Nossa equipe foi convidada ao programa Família de Devotos para contar a missão da Pastoral Deus Vivo.</div>

        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/xameZhKFusM?si=sPq8HEUy7iujKH9d" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <section class="gallery">
        <div class="gallery-header">
            <span class="gallery-line"></span>
            <h2>Galeria</h2>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria1.JPG" alt="Galeria Pastoral Deus Vivo 1">
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria2.JPG" alt="Galeria Pastoral Deus Vivo 2">
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria3.JPG" alt="Galeria Pastoral Deus Vivo 3">
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria4.JPG" alt="Galeria Pastoral Deus Vivo 4">
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria5.jpg" alt="Galeria Pastoral Deus Vivo 5">
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria6.jpg" alt="Galeria Pastoral Deus Vivo 6">
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria7.jpg" alt="Galeria Pastoral Deus Vivo 7">
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria8.jpg" alt="Galeria Pastoral Deus Vivo 8">
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>img/galeria9.jpg" alt="Galeria Pastoral Deus Vivo 9">
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/include/footer.php'; ?>

</body>
</html>