<?php

use App\src\Viagem;

require_once __DIR__.'/vendor/autoload.php';


$viagens = Viagem::getViagens();
//echo '<pre>'; print_r($viagens); echo '</pre>'; exit;

$mensagem = count($viagens) ? false : true;

include_once __DIR__.'/include/head.php';
include_once __DIR__.'/include/html/lista_viagens.php';
include_once __DIR__.'/include/footer.php';     