<?php
require_once __DIR__ . '/vendor/autoload.php';

use \App\src\Viagem;
use \App\session\Login;
use App\src\Pedido;

Login::requireLogin('cliente', 'index.php');

if (!isset($_SESSION['usuario']['id_viagem'])) {
    $_SESSION['usuario']['id_viagem'] = $_POST['id'];
}


$objViagem = new Viagem;

if (isset($_GET['finalizar'])) {
    if ($objViagem->diminuirAssento($_SESSION['usuario']['id_viagem'])) {

        $objPedido = new Pedido;

        $objPedido->setValores(
            $_SESSION['usuario']['id_viagem'],
            $_SESSION['usuario']['cliente']['id'],
            filter_input(INPUT_POST, 'pagamento', FILTER_SANITIZE_NUMBER_INT),
            filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING),
            filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),
            filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING),
        );


        $objPedido->setPedidoDB();
        if ($objPedido instanceof Pedido) {
            header('location: index.php');
            exit;
        }
    }
    $mensagem = true;
}

$viagem = Viagem::getViagens("id_empresa = t2.id and viagem.id =" . $_SESSION['usuario']['id_viagem'], null, null, 'viagem.id,origem,destino,preco, preco,data,hora,nome as nome', 'empresa t2');

include_once __DIR__ . '/include/head.php';
include_once __DIR__ . '/include/html/comprar.php';
include_once __DIR__ . '/include/footer.php';
