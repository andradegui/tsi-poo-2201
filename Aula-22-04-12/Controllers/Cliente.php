<?php

chdir(__DIR__);
require_once '../Models/Cliente.php';
require_once '../Config/bd.php';

$nome = $_POST['nome'];
$tel = $_POST['tel'];

$stmt = $bd->prepare('  INSERT INTO Cliente (nome, tel)
                        VALUES (:nome, :tel)');

$valores[':nome'] = $_POST['nome'];
$valores[':tel'] = $_POST['tel'];

if ($stmt->execute($valores)) {
    echo "<br> Dados gravados com sucesso! <br>";
} else {
    echo "<br> Dados nao gravados com sucesso :/";
}
