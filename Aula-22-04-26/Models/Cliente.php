<?php

chdir(__DIR__);
require_once './Model.php';

class Cliente extends Model
{

    protected string $table;
    
    public function __construct()
    {
        parent::__construct();

        $this->table = 'cliente';

    }

    function inserir(array $dados): ?int
    {
        
        $stmt = $this->prepare("INSERT INTO {$this->table} (name, telefone) 
                                            VALUES (:name, :telefone)");

        $stmt->bindParam(':name', $dados['name']); 
        $stmt->bindParam(':telefone', $dados['telefone']);


        if($stmt->execute()){
            return $this->lastInsertId();
        }
        else{
            return false;
        }        
    }

    function atualizar(int $id, array $dados): bool
    {
        $stmt = $this->prepare("UPDATE {$this->table} SET 
                                    name = :name, telefone = :telefone
                                WHERE 
                                    id = :id");

        $stmt->bindParam(':id', $id); 
        $stmt->bindParam(':name', $dados['name']); 
        $stmt->bindParam(':telefone', $dados['telefone']);


        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }     
    }
    
    function listar(int $id = null): ?array
    {
        if($id){

            $stmt = $this->prepare("SELECT id, name, telefone FROM {$this->table} WHERE id = :id");

            $stmt->bindParam(':id', $id);
        }
        else{
            $stmt = $this->prepare("SELECT id, name, telefone FROM {$this->table} ");
        }

        $stmt->execute();

        $lista = [];

        while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
            $lista[] = $registro;
        }
        
        return $lista;
    }
}

$cliente = new Cliente();

// echo $cliente->inserir(['name' => 'Guilherme' , 'telefone' => '11949047919']);
// echo $cliente->inserir(['name' => 'Julia' , 'telefone' => '11949047939']);
// echo $cliente->inserir(['name' => 'Vinicius' , 'telefone' => '11949047949']);
// echo $cliente->inserir(['name' => 'Gustavo' , 'telefone' => '11942047949']);
// echo $cliente->atualizar(1, ['Nome' => 'Gui Rafael' , 'Tel' => '11943027919']);
// var_dump($cliente->listar()); 



