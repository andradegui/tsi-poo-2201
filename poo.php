<?php

interface User{

    public function logar();
}

class Aluno implements User{

    protected $nome;
    private $email;
    private $nasc;

    public function logar() {
        echo "Logado";
    }

    public function logout() {
        echo "Tchau";
    }    

    //get e set são métodos para os atributos serem acessados ou alterados
    public function getNome()
    {
        return $this->nome;
    }
 
    public function getEmail()
    {
        return $this->email;
    }

    public function getNasc()
    {
        return $this->nasc;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

class Professor extends Aluno {
    public function mudaNome($nome){
        $this->setNome($nome);
        $this->nome = $nome;
    }
} 

$gui = new Professor;

$gui->mudaNome('vini');

var_dump($gui);



