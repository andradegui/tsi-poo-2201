<?php

chdir(__DIR__);
require_once './Model.php';

class Investimento extends Model
{
    protected string $table;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'investimentos';
    }


    function inserir(array $dados): ?int
    {

        $stmt = $this->prepare("INSERT INTO {$this->table} (qtd, id_ativo, id_cliente) 
                                            VALUES (:qtd, :id_ativo, :id_cliente)");

        $stmt->bindParam(':qtd', $dados['qtd']);
        $stmt->bindParam(':id_ativo', $dados['id_ativo']);
        $stmt->bindParam(':id_cliente', $dados['id_cliente']);


        if ($stmt->execute()) {
            return $this->lastInsertId();
        } else {
            return false;
        }
    }

    function atualizar(int $id, array $dados): bool
    {
        $stmt = $this->prepare("UPDATE {$this->table} SET 
                                    qtd = :qtd, id_ativo = :id_ativo, id_cliente = :id_cliente
                                WHERE 
                                    id = :id");

        $stmt->bindParam(':qtd', $dados['qtd']);
        $stmt->bindParam(':id_ativo', $dados['id_ativo']);
        $stmt->bindParam(':id_cliente', $dados['id_cliente']);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }   

    function listar(int $id = null): ?array
    {
        
        if($id){

            $stmt = $this->prepare("SELECT id, qtd, id_ativo, id_cliente FROM {$this->table} WHERE id = :id");

            $stmt->bindParam(':id', $id);
        }
        else{
            $stmt = $this->prepare("SELECT id, qtd, id_ativo, id_cliente FROM {$this->table} ");
        }

        $stmt->execute();

        $lista = [];

        while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
            $lista[] = $registro;
        }
        
        return $lista;
    }
}

$investimento = new Investimento;

echo $investimento->inserir(['qtd' => '12', 'id_ativo' => '2', 'id_cliente' => '13']);
echo $investimento->inserir(['qtd' => '6', 'id_ativo' => '3', 'id_cliente' => '14']);
echo $investimento->inserir(['qtd' => '18', 'id_ativo' => '4', 'id_cliente' => '15']);
echo $investimento->inserir(['qtd' => '10', 'id_ativo' => '4', 'id_cliente' => '16']);