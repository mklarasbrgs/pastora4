<?php
    require_once __DIR__ . '/../config/connection.php';

    $whatsNumero = '5512997911364';
    $whatsExibir = '(12) 99791-1364';
    $whatsMsg    = 'Olá! Gostaria de doar ingredientes para a Pastoral Deus Vivo.';
    $linkWhats   = 'https://wa.me/' . $whatsNumero . '?text=' . urlencode($whatsMsg);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/doacao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= BASE_URL ?>css/site.css?v=2">
</head>
<body>

    <?php include __DIR__ . '/../include/header.php'; ?>

    <section class="doacao">
        <div class="doacao-header">
            <span class="doacao-line"></span>
            <h2>Ajude a montar a marmita</h2>
        </div>

        <div class="doacao-content">

            <div class="doacao-marmita">
                <img src="<?= BASE_URL ?>img/Pernil Acebolado com Farofa.jpeg" alt="Marmita da Pastoral Deus Vivo">

                <div class="progress-info">
                    <strong>Marmita completa</strong>
                    <span>51%</span>
                </div>
                <div class="progress progress-grande">
                    <div class="progress-fill" style="width: 51%"></div>
                </div>
            </div>

            <div class="doacao-ingredientes">
                <h3>O que ainda precisamos</h3>

                <div class="ingrediente">
                    <div class="progress-info">
                        <strong>Arroz</strong>
                        <span>70%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-fill" style="width: 70%"></div>
                    </div>
                    <small>Faltam 12 kg (28 de 40 kg)</small>
                </div>

                <div class="ingrediente">
                    <div class="progress-info">
                        <strong>Pernil</strong>
                        <span>40%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-fill" style="width: 40%"></div>
                    </div>
                    <small>Faltam 15 kg (10 de 25 kg)</small>
                </div>

                <div class="ingrediente">
                    <div class="progress-info">
                        <strong>Alho</strong>
                        <span>40%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-fill" style="width: 40%"></div>
                    </div>
                    <small>Faltam 18 kg (12 de 30 kg)</small>
                </div>

                <div class="ingrediente">
                    <div class="progress-info">
                        <strong>Cebola</strong>
                        <span>100%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-fill" style="width: 100%"></div>
                    </div>
                    <small>Meta Concluída</small>
                </div>

                <div class="ingrediente">
                    <div class="progress-info">
                        <strong>Cenoura</strong>
                        <span>30%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-fill" style="width: 30%"></div>
                    </div>
                    <small>Faltam 7 L (3 de 10 L)</small>
                </div>

                <div class="ingrediente">
                    <div class="progress-info">
                        <strong>Vinagre</strong>
                        <span>25%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-fill" style="width: 25%"></div>
                    </div>
                    <small>Faltam 15 kg (5 de 20 kg)</small>
                </div>
            </div>

        </div>
    </section>

    <!-- WHATSAPP, logo abaixo -->
    <section class="doacao-contato">
        <h2>Quer doar ingredientes?</h2>
        <p>Podemos buscar na sua casa ou você pode entregar para nós. Fale com a gente para combinar:</p>

        <a href="<?= $linkWhats ?>" target="_blank" rel="noopener noreferrer" class="doacao-numero">
            <?= $whatsExibir ?>
        </a>

        <a href="<?= $linkWhats ?>" target="_blank" rel="noopener noreferrer" class="doacao-whatsapp">
            Chamar no WhatsApp
        </a>
    </section>

    <section class="doacao-localizacao" aria-labelledby="localizacao-heading">
        <div class="localizacao-heading">
            <span class="localizacao-eyebrow">Onde nos encontrar</span>
            <h2 id="localizacao-heading">Localização da Paróquia</h2>
            <p>As doações podem ser combinadas com a Pastoral. A Paróquia Nossa Senhora da Glória fica na Praça Nossa Senhora da Glória, 200, bairro Pedregulho, Guaratinguetá – SP.</p>
        </div>
        <div class="mapa-container">
            <iframe
                title="Mapa da Paróquia Nossa Senhora da Glória em Guaratinguetá"
                src="https://maps.google.com/maps?q=Par%C3%B3quia%20Nossa%20Senhora%20da%20Gl%C3%B3ria%2C%20Pra%C3%A7a%20Nossa%20Senhora%20da%20Gl%C3%B3ria%2C%20200%2C%20Pedregulho%2C%20Guaratinguet%C3%A1%20SP&t=&z=16&ie=UTF8&iwloc=&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>
        <a class="localizacao-link" href="https://www.google.com/maps/search/?api=1&query=Par%C3%B3quia+Nossa+Senhora+da+Gl%C3%B3ria%2C+Pra%C3%A7a+Nossa+Senhora+da+Gl%C3%B3ria%2C+200%2C+Guaratinguet%C3%A1%2C+SP" target="_blank" rel="noopener noreferrer">Abrir localização no Google Maps ↗</a>
    </section>

    <?php include __DIR__ . '/../include/footer.php'; ?>

</body>
</html>