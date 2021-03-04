<?php

namespace App\src;

use \App\src\Usuario;
use \App\db\DataBase;


class Empresa extends Usuario
{
    public $cnpj;
                    
    /**
     * Método que define os valores de acordo com o POST
     *
     * @param  string $nome
     * @param  string $email
     * @param  string $senha
     * @param  string $cnpj
     * @return void
     */
    public function setValores($nome, $email, $senha, $cnpj)
    {
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
        'nome' => $this->nome,
        'email' => $this->email,
        'senha' => $this->senha,
        'cnpj' => $this->cnpj,
      ]); 
      return true;
    }

    /**
     * Método que verifica o banco de dados através do email
     *
     * @param  string $email
     * @return Usuario
     */
    public static function  getEmpresaCadastro($db,$email,$cnpj){
      return (new DataBase($db))->getSelectDB('email = "'.$email.'"')->fetchObject(self::class);
  }
  
    
}