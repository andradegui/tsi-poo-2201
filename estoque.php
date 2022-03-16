<?php

require_once "Classes/Estoque.php";
require_once "Classes/Produto.php";

//pq criou a classe main? serve para inicializar o código e deixar o código organizado 
//e não deixar ele procedural
class Main{

    private $estoque;
    private $produto;

    public function __construct() {
        
        $this->produto = new Produto();

        $objProd = $this->produto->criar(['Iphone 12']);
        
                                    //aqui falo que existe uma dependência de estoque       
        $this->estoque = new Estoque($this->produto);
    }

    
}

new Main;