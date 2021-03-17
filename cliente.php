<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\session\Login;
use \App\src\Viagem;


$mensagem = true; //count($pedidos) ? false : true;

include_once __DIR__ . '/include/head.php';
include_once __DIR__ . '/include/html/cliente.php';

if (isset($_GET['pagina'])) {
    switch ($_GET['pagina']) {
        case 'MinhaConta':
            include_once __DIR__ . '/include/html/minhaconta.php';
            break;

        case 'AlterarSenha':
            break;

        case 'MeusPedidos':
            include_once __DIR__ . '/include/html/meuspedidos.php';
            break;
            
    }
} else {
    include_once __DIR__ . '/include/html/minhaconta.php';
}

include_once __DIR__ . '/include/footer.php';
