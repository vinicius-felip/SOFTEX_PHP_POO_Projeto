<?php

require_once __DIR__ . '/vendor/autoload.php';


use \App\session\Login;
use \App\src\Cliente;
use \App\src\Empresa;
use App\src\Usuario;

Login::requireLogout();

$mensagem = false;

if (isset($_POST['tipo'])) {
    switch ($_POST['tipo']) {
        case 'cliente':
            $objUsuario = Cliente::getClienteCadastro('cliente', $_POST['email'], $_POST['cpf']);       
            if ($objUsuario instanceof Usuario) {
                $mensagem = true;
                break;
            }
            $objUsuario = new Cliente;
            $objUsuario->setValores($_POST['nome'], $_POST['email'], password_hash($_POST['senha'], PASSWORD_BCRYPT), $_POST['cpf']);
            if ($objUsuario->setClienteDB()) {
                header('location:entrar.php');
            }
        case 'empresa':
            $objUsuario = new Empresa;
            $objUsuario->setValores($_POST['nome'], $_POST['email'], password_hash($_POST['senha'], PASSWORD_BCRYPT), $_POST['cnpj']);
            if ($objUsuario->setEmpresaDB()) {
                header('location:entrar.php');
            }
            break;
    }
}

include_once __DIR__ . '/include/html/cadastrar.php';
