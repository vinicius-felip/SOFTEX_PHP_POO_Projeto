<?php
require_once __DIR__ . '/vendor/autoload.php';

use \App\src\Onibus;

if (isset($_POST['origem'])) {
    $objOnibus = new Onibus;
    $objOnibus->origem = $_POST['origem'];
    $objOnibus->destino = $_POST['destino'];
    $objOnibus->saida = $_POST['data']." ".$_POST['hora'].":00";
    $objOnibus->preco = $_POST['preco'];
    $objOnibus->assentos = $_POST['assentos'];

    if ($objOnibus->cadastrar()){
        header('location: index.php');
    }
    
}

include_once __DIR__ . '/include/head.php';
include_once __DIR__ . '/include/html/agendar.php';
include_once __DIR__ . '/include/footer.php';
