<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\session\Login;
use \App\src\Viagem;

Login::requireLogin('App\src\Empresa', 'index.php');


$viagens = Viagem::getViagens('id_empresa = '.$_SESSION['usuario']['App\src\Empresa']['id'], "'id' ASC");


include_once __DIR__ . '/include/head_empresa.php';

if (isset($_GET['acao'])) {
    switch ($_GET['acao']) {

        case 'adicionar':

            if (isset($_POST['origem'])) {
                $objViagem = new Viagem();
                $objViagem->setValores(
                    $_SESSION['usuario']['App\src\Empresa']['id'],
                    $_POST['origem'],
                    $_POST['destino'],
                    $_POST['data'],
                    $_POST['hora'],
                    floatval($_POST['preco']),
                    $_POST['assentos']
                );
                
                $objViagem->setViagemDB();
                if ($objViagem instanceof Viagem){
                    $_GET['status']='success';
                }
            }
            include_once __DIR__ . '/include/html/inserir_viagem.php';
            break;

        case 'alterar':

            include_once __DIR__ . '/include/html/alterar_viagem.php';
            break;

        case 'deletar':

            break;
    }
} else {
    include_once __DIR__ . '/include/html/viagens_empresa.php';
}
include_once __DIR__ . '/include/footer_empresa.php';
