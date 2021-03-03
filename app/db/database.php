<?php

namespace App\db;

use mysqli;
use PDO;
use PDOException;
use PDOStatement;

class DataBase
{
    /**
     * HOST de conexão com o banco de dados
     * 
     * @var string
     */
    const HOST = "localhost";

    /**
     * Nome do banco de dados
     * 
     * @var string
     */
    const NAME = "bus_tour";

    /**
     * Usuário do banco de dados
     * 
     * @var string
     */
    const USER = "root";

    /**
     * Senha de acesso ao banco de dados
     * 
     * @var string
     */

    const PASS = "";

    /**
     * Tabela que vai ser manipulada
     * 
     * @var string
     */
    private $tabela;

    /**
     * Cria a conexão com o banco de dados
     *
     * @var PDO
     */
    private $conexao;

    /**
     * Define a tabela e conexão
     *
     * @param  string $t
     * @return void
     */
    public function __construct($t = null)
    {
        $this->tabela = $t;
        $this->setConexao();
    }

    /**
     * Metodo que cria a conexão com o banco de dados
     *
     * @return void
     */
    private function setConexao()
    {
        try {
            $this->conexao = new PDO(
                "mysql:host=" . self::HOST . ";dbname=" . self::NAME,
                self::USER,
                self::PASS
            );
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERRO' . $e->getMessage());
        }
    }

    /**
     * Metodo que insere os dados no banco
     *
     * @param  string $query
     * @param  array $params
     * @return PDOStatement
     */
    public function execute($query, $params = []){
        try{
            $result = $this->conexao->prepare($query);
            $result->execute($params);
            return $result;
        } catch (PDOException $e) {
            die('ERRO' . $e->getMessage());
        }
    }
    
    /**
     * Método que define o código SQL para inserir no banco de dados
     * 
     * @param array 
     * @return integer
     */
    public function setQueryInsert($info){
        /**
         * Dados da query
         */
        $campos = array_keys($info);
        $valores = array_pad([],count($campos),'?');
        
        /**
         * Monta a query
         */
        $query = 'INSERT INTO '.$this->tabela.' ('.implode(',',$campos).') VALUES ('.implode(',',$valores).')';

        $this->execute($query,array_values($info));
        return $this->conexao->lastInsertId();
    }
        
    /**
     * Método que define o código SQL de consulta no banco de dados
     *
     * @param  string $where
     * @param  string $order
     * @param  string $limit
     * @return PDOStatement
     */
    public function setQuerySelect($where = null, $order = null, $limit = null, $campos = '*' ){
        /**
         * Dados da query
         */
        $where = strlen($where) ? 'WHERE '.$where : ''; 
        $order = strlen($where) ? 'ORDER BY '.$where : ''; 
        $limit = strlen($where) ? 'LIMIT '.$where : ''; 

         /**
         * Monta a query
         */
        $query = 'SELECT '.$campos.' FROM '.$this->tabela.' '.$where.' '.$order.' '.$limit;

        return $this->execute($query);
    }
    
}


