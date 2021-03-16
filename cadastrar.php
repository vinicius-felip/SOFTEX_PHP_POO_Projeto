<?php

require_once __DIR__ . '/vendor/autoload.php';


use \App\session\Login;
use \App\src\Cliente;
use \App\src\Empresa;
use App\src\Usuario;

Login::requireLogout();

$mensagem = null;

if (isset($_POST['tipo'])) {
    switch ($_POST['tipo']) {

        case 'cliente':
            
            $objUsuario = Cliente::getClienteCadastro('cliente', $_POST['email'], $_POST['cpf']);       
            if ($objUsuario instanceof Usuario) {
                $mensagem = 'cliente';
                break;
            }

            $objUsuario = new Cliente;
            $objUsuario->setValores(strval($_POST['nome']).substr($_FILES['foto']['name'],-4),$_POST['nome'], $_POST['email'], password_hash($_POST['senha'], PASSWORD_BCRYPT), $_POST['cpf']);
            $objUsuario->setClienteDB();
            Cliente::autenticado($objUsuario);
            break;

        case 'empresa':
            $objUsuario = Empresa::getEmpresaCadastro('empresa', $_POST['email'], $_POST['cnpj']);       
            if ($objUsuario instanceof Usuario) {
                $mensagem = 'empresa';
                break;
            }
            
            $objUsuario = new Empresa;
            $objUsuario->setValores($_FILES['image']['name'],$_POST['nome'], $_POST['email'], password_hash($_POST['senha'], PASSWORD_BCRYPT), $_POST['cnpj']);
            $objUsuario->setEmpresaDB();
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/logo-empresas/".$_FILES['image']['name']);
            Empresa::autenticado($objUsuario);
            break;
    }
}

include_once __DIR__ . '/include/html/cadastrar.php';
