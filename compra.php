<?php
require_once __DIR__ . '/vendor/autoload.php';

use \App\src\Viagem;

$objViagem = new Viagem;


if ($objViagem->diminuirAssento($_GET['qnt'],$_GET['id'])){
    header('location: index.php?aai');
    exit;
}

echo '<pre>'; print_r($objViagem); echo '</pre>'; exit;
header('location: viagens.php?uiui');
exit;