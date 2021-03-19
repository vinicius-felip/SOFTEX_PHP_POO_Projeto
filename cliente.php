<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\session\Login;
use App\src\Cliente;
use App\src\Pedido;
use \App\src\Viagem;

Login::requireLogin('cliente', 'index.php');


include_once __DIR__ . '/include/head.php';
include_once __DIR__ . '/include/html/cliente.php';


if (in_array('MinhaConta', $_GET) || !isset($_GET['pagina'])) {
    if (isset($_POST['telefone'])) {

        $objEmail = Cliente::getUsuario('email = "' . $_POST['email'] . '"');
        if ($objEmail instanceof stdClass && $objEmail->id != $_SESSION['usuario']['cliente']['id']) {
            $_SESSION['mensagem'] = 'error';
        } else {
            Cliente::updateClienteDB($_SESSION['usuario']['cliente']['id'], [
                'telefone' => filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING),
                'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),
            ]);
            $_SESSION['mensagem'] = 'success';
        }
    }

    $objUsuario = Cliente::getUsuario("id ='" . $_SESSION['usuario']['cliente']['id'] . "'");

    Cliente::getDados([
        'email' => $objUsuario->email,
        'cpf' => $objUsuario->cpf,
        'telefone' => $objUsuario->telefone,
    ]);

    $cliente = (object) $_SESSION['usuario']['cliente'];

    include_once __DIR__ . '/include/html/minhaconta.php';

    Cliente::delDados([
        'cpf',
        'telefone',
    ]);
} else {
    switch ($_GET['pagina']) {
        case 'AlterarSenha':
            if (isset($_POST['senhaAntiga'])) {

                $confirmacao = $_POST['senhaNova'] == $_POST['senhaConf'] ? true : false;

                $objUsuario = Cliente::getUsuario("id ='" . $_SESSION['usuario']['cliente']['id'] . "'");

                if ($confirmacao) {
                    if (password_verify($_POST['senhaAntiga'], $objUsuario->senha)) {
                        Cliente::updateClienteDB($_SESSION['usuario']['cliente']['id'], [
                            'senha' => password_hash($_POST['senhaNova'], PASSWORD_BCRYPT),
                        ]);
                        $_SESSION['mensagem'] = 'success';
                    } else {
                        $_SESSION['mensagem'] = 'error';
                    }
                } else {
                    $_SESSION['mensagem'] = 'confsenha';
                }
            }

            include_once __DIR__ . '/include/html/alterarsenha.php';

            break;

        case 'MeusPedidos':

            $pedidos = Pedido::getPedidos("id_viagem = viagem.id and id_empresa = empresa.id and id_cliente ='" . $_SESSION['usuario']['cliente']['id'] . "'",'id DESC',null,'pedido.id, pedido.status, pagamento, pedido.data as data_compra, pedido.nome, pedido.email, telefone, viagem.id_empresa, origem, destino, viagem.data, hora, preco, foto','viagem, empresa');

            $mensagem = count($pedidos) ? false : true;


            include_once __DIR__ . '/include/html/meuspedidos.php';
            break;
    }
}

include_once __DIR__ . '/include/footer.php';

unset($_SESSION['mensagem']);
