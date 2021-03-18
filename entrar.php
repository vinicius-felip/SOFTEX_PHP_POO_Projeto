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
            $objUsuario = Cliente::getUsuario('email = "' . $_POST['email'] . '"');

            if (!$objUsuario instanceof stdClass || !password_verify($_POST['senha'], $objUsuario->senha)) {
                $mensagem = true;
                break;
            }


            Cliente::getDados([
                'id' => $objUsuario->id,
                'nome' => $objUsuario->nome,
                'email' => $objUsuario->email,
            ]);
            header('location: empresa.php');
            exit;

        case 'empresa':

            $objUsuario = Empresa::getUsuario('email = "' . $_POST['email'] . '"');

            if (!$objUsuario instanceof stdClass || !password_verify($_POST['senha'], $objUsuario->senha)) {
                $mensagem = true;
                break;
            }


            Empresa::getDados([
                'id' => $objUsuario->id,
                'foto' => $objUsuario->foto,
                'nome' => $objUsuario->nome,
                'email' => $objUsuario->email,
            ]);
            header('location: empresa.php');
            exit;
    }
}

include_once __DIR__ . '/include/html/entrar.php';
