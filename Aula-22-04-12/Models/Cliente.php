<?php

chdir(__DIR__);
require_once './Model.php';

class Cliente extends Model
{

    protected string $table;
    
    public function __construct()
    {
        parent::__construct();

        $this->table = 'cliente';
    }

    function inserir(array $dados): ?int
    {
        return null;
    }

    function atualizar(int $id, array $dados): bool
    {
        return true;
    }

    function apagar(int $id): bool
    {
        return true;
    }

    function listar(int $id = null): ?array
    {
        return null;
    }
}
