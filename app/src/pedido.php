<?php

namespace App\src;

use \App\db\DataBase;

use \PDO;


class Pedido
{

    /**
     * ID do pedido
     *
     * @var integer
     */
    public $id;

    /**
     * ID da viagem que foi solicitada
     *
     * @var string
     */
    public $id_viagem;

    /**
     * ID do cliente que solicitou
     *
     * @var string
     */
    public $id_cliente;

    /**
     * Forma de pagamento
     *
     * @var mixed
     */
    public $pagamento;

    /**
     * Nome do cliente para contato
     *
     * @var mixed
     */
    public $nome;

    /**
     * Email do cliente para contato
     *
     * @var mixed
     */
    public $email;

    /**
     * Telefone do cliente para contato
     *
     * @var mixed
     */
    public $telefone;


    /**
     * Método que recebe o valor do POST
     *
     * @param  string $id_viagem
     * @param  string $id_cliente
     * @param  string $pagamento
     * @param  string $nome
     * @param  string $email
     * @param  string $telefone
     * @return void
     */
    public function setValores($id_viagem, $id_cliente, $pagamento, $nome, $email, $telefone)
    {
        $this->id_viagem = $id_viagem;
        $this->id_cliente = $id_cliente;
        $this->pagamento = $pagamento;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    /**
     * Método que insere um novo pedido no banco de dados
     *
     * @return boolean
     */
    public function setPedidoDB()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d H:i:s');

        $objDataBase = new DataBase('pedido');

        $this->id = $objDataBase->setInsertDB([
            'id_viagem' => $this->id_viagem,
            'id_cliente' => $this->id_cliente,
            'pagamento' => $this->pagamento,
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'data' => $data,
        ]);
    }

    /**
     * Método que exibe os pedidos de cada cliente do banco de dados
     *
     * @param string $where
     * @param string $order
     * @param string $limit
     * @param string $innerJoin
     * @return array
     */
    public static function getPedidos($where = null, $order = null,   $limit = null, $campo = '*', $innerJoin = null)
    {
        return (new DataBase('pedido'))->getSelectDB($where, $order, $limit, $campo, $innerJoin)->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
