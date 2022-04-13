<?php

chdir(__DIR__);
require_once '../Interfaces/Crud.php';

class Cliente implements Crud
{

    private int $id;
    private string $nome;
    private string $telefone;

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
