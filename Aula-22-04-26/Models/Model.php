<?php

include_once __DIR__ . '/../Config/bd.php';

abstract class Model extends PDO
{
    protected string $table;

    public function __construct()
    {
        if (!defined('DSN') || !defined('DB_USER') || !defined('DB_PASS')) {
            die('Não há arquivo de configuração ao BD');
        }

        parent::__construct(DSN, DB_USER, DB_PASS); //puxa os dados do arquivo bd.php
    }

    abstract function inserir(array $dados): ?int; //classe modelo somente com a assinatura das funções

    abstract function atualizar(int $id, array $dados): bool;

    function apagar(int $id){
        $stmt = $this->prepare("DELETE FROM {$this->table} WHERE id = :id");

        $stmt->bindParam(':id', $id);         

        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo "Sucesso ao apagar";

            return true;
        }
        else{
            echo "Nenhuma linha afetada";
            return false;
        } 
    }

    abstract function listar(int $id = null): ?array; //:? siginifica q obrigatoriamente ira retornar um inteiro ou nulo
}
