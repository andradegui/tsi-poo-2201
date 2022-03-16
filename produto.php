<?php

require_once "Classes/Produto.php";

//pq criou a classe main? serve para inicializar o código e deixar o código organizado 
//e não deixar ele procedural
class Main {

    private $produto;

    public function __construct() {
        $this->produto = new Produto();

        $vetor = [];

        $this->novo($vetor);
    }

    function novo($vetor): void {
        
        //função php is_array, retorna true ou false
        if(is_array($vetor)){
            $this->produto->criar($vetor);
        }else{
            throw "Erro";
        }                        
    }    

    //
    public function __destruct() {
        echo "\n Fim do programa";
    }
}

// new Main;

// $produto = new Produto();
// $produto->criar(['celular', 900]);
// $produto->editar(1, ['iphone 8', 1000]);
// $produto->listar(1);
// $produto->apagar(1);


