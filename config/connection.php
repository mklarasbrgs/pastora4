<?php


    if ($_SERVER['HTTP_HOST'] === 'localhost') {

        define('BASE_URL', '/pastoral4/');

        $host = 'localhost';
        $dbname = 'hubsap45_tcc_bdpastoraldeusvivo_2026';
        $username = 'root';     
        $password = '';

    } else {
        define('BASE_URL', '/');

        $host = 'br612.hostgator.com.br';
        $dbname = 'hubsap45_tcc_bdpastoraldeusvivo_2026';
        $username = 'hubsap45_usr_pastoraldeusvivo';     
        $password = '6.|Cuca...[_20.|QTH|-Q#@l|e|s#@|l0c@l!z@ca0?';
    }

    try {

        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die("Erro ao conectar com o banco de dados: " . $e->getMessage());
    }
    
?>
