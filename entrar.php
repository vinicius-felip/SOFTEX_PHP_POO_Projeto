<?php

require_once __DIR__ . '/vendor/autoload.php';

use \App\session\Login;
use \App\src\Cliente;
use \App\src\Empresa;

Login::requireLogout();

$mensagem = false;

if (isset($_POST['tipo'])) {
    switch ($_POST['tipo']) {

        case 'cliente':
            $objUsuario = Cliente::getUsuarioEmail('cliente', $_POST['email']);
            
            if (!$objUsuario instanceof stdClass || !password_verify($_POST['senha'], $objUsuario->senha)) {
                $mensagem = true;
                break;
            }

            Cliente::autenticado($objUsuario);
            break;

        case 'empresa':

            $objUsuario = Empresa::getUsuarioEmail('empresa', $_POST['email']);

            if (!$objUsuario instanceof stdClass || !password_verify($_POST['senha'], $objUsuario->senha)) {
                $mensagem = true;
                break;
            }
            Empresa::autenticado($objUsuario);
            break;
    } 
}

include_once __DIR__ . '/include/html/entrar.php';
