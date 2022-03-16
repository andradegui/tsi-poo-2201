<?php

//mesma coisa que o cd, ch =  change / dir = directory
chdir(__DIR__);
require_once '../Interfaces/Crud.php';


class Categoria
{
    private $id;
    private $nome;

    public function criar(array $dados): bool
    {
        echo "\nCriada Categoria\n";
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
