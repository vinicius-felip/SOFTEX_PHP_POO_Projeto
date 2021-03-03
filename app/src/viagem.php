<?php

namespace App\src;

use \App\db\DataBase;

use  \PDO;

class Viagem
{

  /**
   * ID do ôniibus
   *
   * @var integer
   */
  public $id;

  /**
   * Empresa que está disponibilizando a viagem
   *
   * @var string
   */
  public $empresa;

  /**
   * Cidade de origem da viagem
   *
   * @var string
   */
  public $origem;

  /**
   * Cidade destino da viagem
   *
   * @var string
   */
  public $destino;

  /**
   * Data da saída do ônibus
   *
   * @var string
   */
  public $saida;

  /**
   * Preço da passagem da viagem
   *
   * @var float
   */
  public $preco;

  /**
   * Número de assentos que o ônibus possui
   *
   * @var integer
   */
  public $assentos;


  /**
   * Método para cadastrar um novo ônibus
   *
   * @return boolean
   */
  public function setViagem()
  {
    $objDataBase = new DataBase('viagem');

    $this->id = $objDataBase->setQueryInsert([
      'empresa' => $this->empresa,
      'origem' => $this->origem,
      'destino' => $this->destino,
      'saida' => $this->saida,
      'preco' => $this->preco,
      'assento' => $this->assentos,
    ]);
  }

  /**
   * Metodo para exibir todas as viagens disponíveis do banco de dados
   *
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getViagens($where = null, $order = null,   $limit = null)
  {
    return (new DataBase('viagem'))->setQuerySelect($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
  }
}
