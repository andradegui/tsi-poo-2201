<?php

chdir(__DIR__);
require_once 'Usuario.php';
require_once '../Interfaces/User.php';

class Cliente extends Usuario implements User
{
    public function __construct() {

        //deixa explicito a chamada da classe Usuario, sendo assim será executado 
        //o método chamado em outro arquivo
        parent::__construct();
        echo "\n Construtor da classe cliente";
    }

    public function criar(array $dados): bool {
        echo "\n Criado Cliente";
        return true;
     }
 
     public function apagar(int $id): bool {
         echo "\n Apagado Cliente";
         return true;
     }
 
     public function editar(int $id, array $dados): bool {
         echo "\n Editado Cliente $id";
         return true;
     }
 
     public function listar(int $id = null): array{
         echo "\n Listado Cliente";
         return [];
     }

     public function acao(array $idClientes): bool{
        echo "\n Ação genérica para clientes";
        return true;
    }

    public function executaXPTO(){
        $this->xpto();
    }

}
