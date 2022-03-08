<?php

interface User{

    public function logar();
    public function apagar();

}

class Usuario implements User{

    protected $nome;
    private $email;
    private $nasc;

    public function logar() {
        echo "Logado";
    }

    public function logout() {
        echo "Tchau";
    } 

    public function apagar(){
        echo "Apagado";
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

class Professor extends Usuario {
    public function mudaNome($nome){
        $this->setNome($nome);
        $this->nome = $nome;
    }
} 

class Turma {

    private $professor;

    public function setProfessor(Professor $prof){
       $this->professor = $prof;        
    }

    public function getProfessor()
    {
        return $this->professor;
    }

    public function setNomeProf(Professor $prof){
        $this->setNome($prof);
        $this->professor = $prof;
    }
}

$gui = new Professor;

$gui->mudaNome('vini');

$turma = new Turma();
$turma->setNomeProf('gui');
echo $turma;






