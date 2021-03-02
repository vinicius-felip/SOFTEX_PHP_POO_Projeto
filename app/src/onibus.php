<?php

namespace App\src;

use \App\db\DataBase;

class Onibus
{

  /**
   * ID do ôniibus
   *
   * @var integer
   */
  public $id;

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
  public function cadastrar()
  {
    $objDataBase = new DataBase('onibus');

    $this->id = $objDataBase->setQueryInsert([
      'origem' => $this->origem,
      'destino' => $this->destino,
      'saida' => $this->saida,
      'preco' => $this->preco,
      'assento' => $this->assentos,
    ]);
  }


  
}
