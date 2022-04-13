<?php

chdir(__DIR__);
require_once("../Classes/Investimento.php");
require_once("../Interfaces/Crud.php");

class Ativo implements Crud{
    

    public function criar(array $dados): bool
    {
        echo 'Ativo criado com sucesso';
        return true;
    }

    public function apagar(int $id): bool
    {
        echo 'Ativo apagado com sucesso';
        return true;
    }

    public function editar(int $id, array $dados): bool
    {
        echo 'Dados do ativo alterados com sucesso';
        return true;
    }

    public function listar(int $id = null): array
    {
        echo "Esses são os ativos listados: \n";
        echo '100 aportes de Petrobas';
        return [];
    } 
}