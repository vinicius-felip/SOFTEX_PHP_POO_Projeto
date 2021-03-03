<?php

use App\src\Viagem;

echo '<pre>'; print_r($_POST); echo '</pre>'; exit;

require_once __DIR__.'/vendor/autoload.php';

$viagens = Viagem::getViagens();

include_once __DIR__.'/include/head.php';
include_once __DIR__.'/include/html/lista_viagens.php';
include_once __DIR__.'/include/footer.php';     