<?php
require_once __DIR__ . '/../config/connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós | Pastoral de Rua Deus Vivo</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/sobreNos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/site.css?v=2">
</head>
<body>
    <?php include __DIR__ . '/../include/header.php'; ?>

    <main class="sobre-nos">
        <section class="sobre-container">
            <div class="sobre-imagem">
                <img src="<?= BASE_URL ?>img/foto-tcc.jpeg" alt="Equipe e trabalho da Pastoral de Rua Deus Vivo">
            </div>
            <div class="sobre-texto">
                <h1>Sobre Nós</h1>
                <p>
                    A Pastoral de Rua Deus Vivo é uma organização social que realiza trabalho voluntário de distribuição de marmitas para pessoas em situação de rua. Para facilitar a organização, este projeto busca gerenciar as etapas dessa obra, desde a arrecadação dos alimentos até sua distribuição, contribuindo para que tudo seja realizado da melhor maneira possível.
                </p>
                <p>
                    Este projeto é um Trabalho de Conclusão de Curso (TCC) desenvolvido pelos alunos Maria Clara Borges, Murilo Gonçalves e Pedro Cassinha, do curso de Desenvolvimento de Sistemas da Etec Profº Alfredo de Barros Santos, com a mentoria do Professor Mestre Jonhson de Tarso Silva, para colocar em prática os conhecimentos adquiridos durante o curso.
                </p>
            </div>
        </section>

        <section class="voluntario-section" aria-labelledby="voluntario-heading">
            <div class="voluntario-content">
                <span class="voluntario-eyebrow">Faça parte dessa missão</span>
                <h2 id="voluntario-heading">Seu tempo pode transformar vidas</h2>
                <p>
                    A Pastoral de Rua Deus Vivo acredita que pequenos gestos podem levar acolhimento, esperança e dignidade a quem mais precisa. Se você deseja contribuir com nosso trabalho e ser voluntário, entre em contato com o responsável pela Pastoral para conhecer as possibilidades de participação.
                </p>
                <a class="voluntario-button" href="https://wa.me/5512997911364?text=Ol%C3%A1%21%20Tenho%20interesse%20em%20ser%20volunt%C3%A1rio%28a%29%20na%20Pastoral%20de%20Rua%20Deus%20Vivo." target="_blank" rel="noopener noreferrer">
                    Quero ser voluntário · (12) 99791-1364
                </a>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../include/footer.php'; ?>
</body>
</html>
