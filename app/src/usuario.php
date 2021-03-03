<?php

class Usuario
{    
    /**
     * ID do usuario
     *
     * @var mixed
     */
    public $id;
    
    /**
     * Nome do usuario
     *
     * @var mixed
     */
    public $nome;
        
    /**
     * 
     *
     * @var mixed
     */
    public $email;

    public function cadastrar(){
        ;
    }

    public function setEmail($email){
        $this->email = $email;
    }

}


class Cliente extends Usuario{
    private $cpf;
    public $viagensFeita;


}

class Empresa extends Usuario{
    private $cnpj;
    public $viagens;

}

class Admin extends Usuario{


}