<?php

namespace App\src;

abstract class Usuario
{
    /**
     * ID do usuário
     *
     * @var integer
     */
    public $id;

    /**
     * Nome do usuário
     *
     * @var string
     */
    public $nome;

    /**
     * Email do usuário
     *
     * @var string
     */
    public $email;
    
    /**
     * Senha do usuário
     *
     * @var string
     */
    public $senha;
    
        
    /**
     * Método que retornar os dados do banco de dados do usuario 
     *
     * @param  string $email
     * @return stdClass
     */
    public static function  getUsuario($where){
    }
}
