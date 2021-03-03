<?php
require_once __DIR__ . '/vendor/autoload.php';

use \App\src\Viagem;

if (isset($_POST['origem'])) {
    $objViagem = new Viagem;
    $objViagem->origem = $_POST['origem'];
    $objViagem->destino = $_POST['destino'];
    $objViagem->saida = $_POST['data'] . " " . $_POST['hora'] . ":00";
    $objViagem->preco = $_POST['preco'];
    $objViagem->assentos = $_POST['assentos'];
    $objViagem->empresa = 'null';

    if ($objViagem->setViagem()) {
        header('location: index.php?status=success');
        exit;
    }
}

include_once __DIR__ . '/include/head.php';
include_once __DIR__ . '/include/html/agendar.php';
include_once __DIR__ . '/include/footer.php';
