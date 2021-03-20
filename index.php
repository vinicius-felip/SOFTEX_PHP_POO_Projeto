<?php

require_once __DIR__.'/vendor/autoload.php';
use App\session\Login;
use App\src\Viagem;



$viagensOrigem = Viagem::getViagens(null,null,null,'DISTINCT origem');
$viagensDestino = Viagem::getViagens(null,null,null,'DISTINCT destino');


foreach ($viagensDestino as $viagem){
    $autocompleteDestino[] = $viagem->destino;
}

foreach ($viagensOrigem as $viagem){
    $autocompleteOrigem[] = $viagem->origem;
}


Login::iniciarSession();

if (isset($_SESSION['usuario'])){
    Login::requireLogin('cliente', 'empresa.php');
}


include_once __DIR__.'/include/head.php';
include_once __DIR__.'/include/html/inicio.php';
include_once __DIR__.'/include/footer.php';     