<?php

//mesma coisa que o cd, ch =  change / dir = directory
chdir(__DIR__);
require_once '../Interfaces/Crud.php';
require_once 'Produto.php';

class Estoque implements Crud
{
    private $id;
    private $id_produto;
    private $qtd;
    private $local;
    private $limite_min;
    private $produto;

    public function __construct(Produto $objProd = null) {
    
        if(is_array($objProd)){
            $this->produto = $objProd;
        }
    }

    public function criar(array $dados): bool
    {
        echo "\nCriada Estoque\n";
        return true;
    }
    public function apagar(int $id): bool
    {
        echo "\nApagada Categoria $id\n";
        return true;
    }
    public function editar(int $id, array $dados): bool
    {
        echo "\nEditada Categoria $id\n";
        return true;
    }
    public function listar(int $id = null): array
    {
        echo "\nListada Categoria $id\n";
        return [];
    }

}
