<?php

chdir(__DIR__);
require_once("../Classes/Ativo.php");
require_once("../Interfaces/Crud.php");

class Investimento implements Crud  {
    
    private int $id;
    private int $qtd;
    private int $idAtivo;
    private int $idInvestimento;

    public function criar(array $dados): bool
    {
        echo 'Cliente cadastrado com sucesso';
        return true;
    }

    public function apagar(int $id): bool
    {
        echo 'Cliente apagado com sucesso';
        return true;
    }

    public function editar(int $id, array $dados): bool
    {
        echo 'Dados alterados com sucesso';
        return true;
    }

    public function listar(int $id = null): array
    {
        echo "Esses são os clinetes listados: \n";
        echo 'Guilherme';
        return [];
    }

}