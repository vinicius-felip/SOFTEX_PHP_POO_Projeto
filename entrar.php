<?php

require_once __DIR__.'/vendor/autoload.php';

use \App\session\Login;
use \App\src\Cliente;
use \App\src\Empresa;
use App\src\Usuario;

Login::requireLogout();

$mensagem = false;

if (isset($_POST['tipo'])) {
    switch ($_POST['tipo']) {
        case 'cliente': 
            $objUsuario = Cliente::getUsuarioEmail('cliente',$_POST['email']);
            if (!$objUsuario instanceof Usuario || !password_verify($_POST['senha'],$objUsuario->senha)){
                $mensagem = true;
                break;
            }
            Login::autenticado($objUsuario);
            echo '<pre>'; print_r($GLOBALS); echo '</pre>'; exit;
        case 'empresa':

            break;      
    }
}

include_once __DIR__.'/include/html/entrar.php';
