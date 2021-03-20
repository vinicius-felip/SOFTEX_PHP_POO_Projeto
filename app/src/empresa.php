<?php

namespace App\src;

use \App\src\Usuario;
use \App\db\DataBase;
use \App\session\Login;


class Empresa extends Usuario
{  
  /**
   * CNPJ da empresa
   *
   * @var mixed
   */
  public $cnpj;
  
  /**
   * Logo da empresa
   *
   * @var mixed
   */
  public $foto;

  /**
   * Método que define os valores de acordo com o POST
   *
   * @param  string $nome
   * @param  string $email
   * @param  string $senha
   * @param  string $cnpj
   * @return void
   */
  public function setValores($foto, $nome, $email, $senha, $cnpj)
  {
    $this->foto = $foto;
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->cnpj = $cnpj;
  }

  /**
   * Método que cadastra uma nova empresa no banco de dados
   *
   * @return boolean
   */
  public function setEmpresaDB()
  {
    $objDataBase = new DataBase('empresa');

    $this->id = $objDataBase->setInsertDB([
      'foto' => $this->foto,
      'nome' => $this->nome,
      'email' => $this->email,
      'senha' => $this->senha,
      'cnpj' => $this->cnpj,
    ]);
  }

  /**
   * Método que verifica o banco de dados através do email
   *
   * @param  string $email
   * @return Usuario
   */
  public static function  getEmpresaCadastro($db, $email, $cnpj)
  {
    return (new DataBase($db))->getSelectDB('email = "' . $email . '" or cnpj = "' . $cnpj . '"')->fetchObject(self::class);
  }

  /**
   * Método que verifica o banco de dados através do email
   *
   * @param  string $email
   * @return stdClass
   */
  public static function  getUsuario($where)
  {
    return (new DataBase('empresa'))->getSelectDB($where)->fetchObject();
  }

  /**
   * Método que cria uma $_SESSION do empresa quando autenticado
   *
   * @param  object Client $objUsuario
   * @param  string $location
   */
  public static function getDados($dados)
  {
    Login::getDados('empresa', $dados);
  }

  /**
   * Metodo que deleta dados da $_SESSION do empresa
   *
   * @param  array $dados
   */
  public static function delDados($dados)
  {
    Login::delDados('empresa', $dados);
  }
}
