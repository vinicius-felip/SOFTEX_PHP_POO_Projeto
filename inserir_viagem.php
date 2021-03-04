<?php
require_once __DIR__ . '/vendor/autoload.php';

use \App\src\Viagem;
use \App\session\Login;

//  Login::requireLogin();

if (isset($_POST['origem'])) {
    $objViagem = new Viagem();
    $objViagem->setValores(
        $_POST['empresa']=null,
        $_POST['origem'],
        $_POST['destino'],
        $_POST['data'] . " " . $_POST['hora'] . ":00",
        floatval($_POST['preco']),
        $_POST['assentos']
    );

    if ($objViagem->setViagemDB()) {
        header('location: index.php?status=success');
        exit;
    }
}

include_once __DIR__ . '/include/head.php';
include_once __DIR__ . '/include/html/agendar.php';
include_once __DIR__ . '/include/footer.php';
