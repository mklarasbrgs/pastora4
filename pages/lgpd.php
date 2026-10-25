<?php
require_once __DIR__ . '/../config/connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacidade e LGPD | Pastoral de Rua Deus Vivo</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/site.css?v=2">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/lgpd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include __DIR__ . '/../include/header.php'; ?>

    <main class="lgpd-page">
        <header class="lgpd-hero">
            <span>Privacidade e cuidado</span>
            <h1>Lei Geral de Proteção de Dados Pessoais (LGPD)</h1>
            <p>A privacidade também faz parte do acolhimento. Entenda como os dados pessoais devem ser tratados no contexto do atendimento da Pastoral de Rua Deus Vivo.</p>
        </header>

        <section class="lgpd-card">
            <h2>O que é a LGPD?</h2>
            <p>A Lei nº 13.709/2018 (LGPD) protege a liberdade, a privacidade e os direitos das pessoas no tratamento de seus dados pessoais, tanto em meios físicos quanto digitais. No contexto da Pastoral de Rua Deus Vivo, essas orientações são importantes porque moradores em situação de rua que buscam acolhimento ou reabilitação podem precisar fornecer informações para que o atendimento seja organizado.</p>

            <h2>Quais dados precisam de proteção?</h2>
            <p>Dados como nome, data de nascimento, documentos e informações de contato podem identificar uma pessoa. Caso sejam coletadas informações sobre saúde ou outras categorias consideradas sensíveis pela LGPD, elas exigem atenção e proteção ainda maiores. A coleta deve se limitar ao que for necessário para uma finalidade clara relacionada ao atendimento.</p>

            <h2>Como os dados devem ser tratados?</h2>
            <p>As informações devem ser utilizadas apenas para finalidades legítimas e informadas, mantidas com segurança e acessadas somente por pessoas autorizadas que precisem delas para realizar suas funções. Também é importante evitar compartilhamentos indevidos, manter os dados corretos e respeitar a pessoa atendida, sem discriminação por sua situação social ou pelas informações fornecidas.</p>

            <h2>Direitos das pessoas atendidas</h2>
            <p>Cada pessoa é titular de seus dados pessoais e tem direitos relacionados à privacidade e ao tratamento dessas informações, conforme a LGPD. Por isso, a organização deve explicar de forma acessível por que os dados são solicitados, como serão utilizados e com quem poderão ser compartilhados, observando as bases legais aplicáveis e os direitos previstos na legislação.</p>

            <aside class="lgpd-note">A proteção dos dados é parte do cuidado e do respeito à dignidade de cada pessoa. Estas informações apresentam princípios gerais da LGPD e não substituem a definição dos procedimentos e responsabilidades concretos de tratamento de dados da organização.</aside>
        </section>
    </main>

    <?php include __DIR__ . '/../include/footer.php'; ?>
</body>
</html>
