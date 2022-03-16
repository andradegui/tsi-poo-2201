<?php

chdir(__DIR__);
require_once '../Interfaces/Crud.php';

class Produto implements Crud {
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $id_categoria;

    public function criar(array $dados): bool {
        echo "\n Criado Produto";
        return true;
     }
 
     public function apagar(int $id): bool {
         echo "\n Apagado Produto";
         return true;
     }
 
     public function editar(int $id, array $dados): bool {
         echo "\n Editado Produto $id";
         return true;
     }
 
     public function listar(int $id = null): array{
         echo "\n Listado Produtos";
         return [];
     }


}