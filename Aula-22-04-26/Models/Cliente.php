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
        
        $stmt = $this->prepare("INSERT INTO {$this->table} (Nome, Tel) 
                                            VALUES (:Nome, :Tel)");

        $stmt->bindParam(':Nome', $dados['Nome']); 
        $stmt->bindParam(':Tel', $dados['Tel']);


        if($stmt->execute()){
            return $this->lastInsertId();
        }
        else{
            return false;
        }        
    }

    function atualizar(int $id_cliente, array $dados): bool
    {
        $stmt = $this->prepare("UPDATE {$this->table} SET 
                                    Nome = :Nome, Tel = :Tel
                                WHERE 
                                    id_cliente = :id_cliente");

        $stmt->bindParam(':id_cliente', $id_cliente); 
        $stmt->bindParam(':Nome', $dados['Nome']); 
        $stmt->bindParam(':Tel', $dados['Tel']);


        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }     
    }

    function apagar(int $id_cliente): bool
    {
        $stmt = $this->prepare("DELETE FROM {$this->table} WHERE id_cliente = :id_cliente");

        $stmt->bindParam(':id_cliente', $id_cliente);         

        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo "Sucesso ao apagar";

            return true;
        }
        else{
            echo "Nenhuma linha afetada";
            return false;
        } 
    }

    function listar(int $id_cliente = null): ?array
    {
        // $stmt = $this->prepare("SELECT Nome, Tel FROM {$this->table} WHERE id_cliente = :id_cliente");

        // $stmt->bindParam(':id_cliente', $id_cliente);                                    

        // if($stmt->execute()){
        //     return true;
        // }
        // else{
        //     return false;
        // }    

        return [];
    }
}

$cliente = new Cliente();


// echo $cliente->atualizar(1, ['Nome' => 'Gui Rafael' , 'Tel' => '11943027919']);
echo $cliente->apagar(8);