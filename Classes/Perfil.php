<?php 

//memsa coisa que o cd, ch =  change / dir = directory
chdir(__DIR__);
require_once '../Interfaces/Crud.php';

class Perfil implements Crud {
    private $id;
    private $nome;
    private $descricao;
    private $permissoes;

    public function criar(array $dados): bool {
       echo "\n Criado Perfil";
       return true;
    }

    public function apagar(int $id): bool {
        echo "\n Apagado Perfil";
        return true;
    }

    public function editar(int $id, array $dados): bool {
        echo "\n Editado Perfil $id";
        return true;
    }

    public function listar(int $id = null): array{
        echo "\n Listado Perfil";
        return [];
    }
}