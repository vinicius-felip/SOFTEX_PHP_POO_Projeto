<?php

use App\src\Viagem;

require_once __DIR__ . '/vendor/autoload.php';

if (empty($_GET['origem']) || empty($_GET['destino'])){
    header('location: index.php');
    }

    
/* VALORES DE PESQUISA NO BANCO DE DADOS */


$origem = [
    'bd' => "origem = '".filter_input(INPUT_GET, 'origem', FILTER_SANITIZE_STRING)."'",
    'titulo' => filter_input(INPUT_GET, 'origem', FILTER_SANITIZE_STRING)
];


$destino = [
    'bd' => "destino = '".filter_input(INPUT_GET, 'destino', FILTER_SANITIZE_STRING)."'",
    'titulo' => filter_input(INPUT_GET, 'destino', FILTER_SANITIZE_STRING)
];


$data = strlen($_GET['data']) ? "data = '".filter_input(INPUT_GET, 'data', FILTER_SANITIZE_STRING)."'" : null;



$hora = [
    isset($_POST['hora1']) ? "hora BETWEEN '00:00' and '05:59'" : null,
    isset($_POST['hora2']) ? "hora BETWEEN '06:00' and '11:59'" : null,
    isset($_POST['hora3']) ? "hora BETWEEN '12:00' and '17:59'" : null, 
    isset($_POST['hora4']) ? "hora BETWEEN '18:00' and '23:59'" : null,
];
$hora =  array_filter($hora);
$hora = array_count_values($hora) ? '('.implode (' or ', $hora).')' : null;


$empresa = isset($_POST['empresa']) ? "(id_empresa = ".implode(' or id_empresa = ',$_POST['empresa']).')' : null;

$order  = filter_input(INPUT_POST, 'classificar', FILTER_SANITIZE_STRING);
$order = in_array($order,['preco','assento','data']) ? $order : 'preco';





/* SQL FILTRO */ 
$busca = [$origem['bd'],$destino['bd'],$data];
$busca = array_filter($busca);

$whereFiltro =  "assento > '0' and ".implode (' and ', $busca);

$campoFiltroHora = 'COUNT(0) > 0 as hora ';





/* SQL VIAGEM */
$busca = [$origem['bd'], $destino['bd'], $data, $hora, $empresa];
$busca = array_filter($busca);

$whereViagem = "assento > '0' and ".implode (' and ', $busca);
$orderViagem = $order == 'assento' ? "$order DESC" :"$order ASC";

$filtro =  [
    'Empresa' => Viagem::getViagens("id_empresa = t2.id and $whereFiltro", null, null, 'DISTINCT id_empresa,nome', 'empresa t2'),  
    'Madrugada' => Viagem::getViagens("hora BETWEEN '00:00' and '05:59' and $whereFiltro", null, null, $campoFiltroHora),
    'Manhã' => Viagem::getViagens("hora BETWEEN '06:00' and '11:59' and $whereFiltro", null, null, $campoFiltroHora),
    'Tarde' => Viagem::getViagens("hora BETWEEN '12:00' and '17:59' and $whereFiltro", null, null, $campoFiltroHora),
    'Noite' => Viagem::getViagens("hora BETWEEN '18:00' and '23:59' and $whereFiltro", null, null, $campoFiltroHora),
];


$viagens = Viagem::getViagens("id_empresa = t2.id and $whereViagem", $orderViagem,null,'viagem.id,origem,destino,preco,assento,preco,data,hora,foto as nome', 'empresa t2');



$mensagem = count($viagens) ? false : true;

include_once __DIR__ . '/include/head.php';
include_once __DIR__ . '/include/html/lista_viagens.php';
include_once __DIR__ . '/include/footer.php';
