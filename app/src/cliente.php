<?php

namespace App\src;

use \App\src\Usuario;
use \App\db\DataBase;


class Cliente extends Usuario
{
  public $cpf;

  /**
   * Método que define os valores de acordo com o POST
   *
   * @param  string $nome
   * @param  string $email
   * @param  string $senha
   * @param  string $cpf
   * @return void
   */
  public function setValores($nome, $email, $senha, $cpf)
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->cpf = $cpf;
  }

  /**
   * Método que cadastra um novo cliente no banco de dados
   *
   * @return boolean
   */

  public function setClienteDB()
  {
    $objDataBase = new DataBase('cliente');

    $this->id = $objDataBase->setInsertDB([
      'nome' => $this->nome,
      'email' => $this->email,
      'senha' => $this->senha,
      'cpf' => $this->cpf
    ]);

    return true;
  }

  /**
   * Método que verifica o banco de dados através do email
   *
   * @param  string $email
   * @return Usuario
   */
  public static function  getClienteCadastro($db, $email, $cpf)
  {
    return (new DataBase($db))->getSelectDB('email = "' . $email . '" or cpf = "' . $cpf.'"')->fetchObject(self::class);
  }
}
