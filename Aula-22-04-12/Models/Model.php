<?php

abstract class Model extends PDO
{
    public function __construct()
    {
        if (is_file(__DIR__, '/../Config/bd.php')) {
            die('Não há arquivo de configuração ao BD');
        }

        parent::__construct(DSN, DB_USER, DB_PASS); //puxa os dados do arquivo bd.php
    }

    abstract function inserir(array $dados): ?int; //classe modelo somente com a assinatura das funções

    abstract function atualizar(int $id, array $dados): bool;

    abstract function apagar(int $id): bool;

    abstract function listar(int $id = null): ?array; //:? siginifica q obrigatoriamente ira retornar um inteiro ou nulo
}
