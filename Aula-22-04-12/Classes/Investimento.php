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
        echo 'Investimento feito com sucesso';
        return true;
    }

    public function apagar(int $id): bool
    {
        echo 'Investimento apagado com sucesso';
        return true;
    }

    public function editar(int $id, array $dados): bool
    {
        echo 'Dados do investimento alterados com sucesso';
        return true;
    }

    public function listar(int $id = null): array
    {
        echo "Esses são os investimento listados: \n";
        echo '100 aportes de Petrobras';
        return [];
    }

}