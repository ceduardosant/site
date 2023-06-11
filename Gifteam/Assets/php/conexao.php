<?php
/* criar o banco de dados 
 CREATE DATABASE IF NOT EXISTS pdo;
criar a tabela
 USE pdo; 
 CREATE TABLE IF NOT EXISTS clientes (
    email VARCHAR(80) PRIMARY KEY, 
    endereco VARCHAR(80), 
    cidade VARCHAR(30), 
    estado VARCHAR(40), 
    cep VARCHAR(09));
    
    */
    
try {
    $conectar = new PDO("mysql:host=localhost;dbname=bd_gifteam;charset=utf8", "root", "");
    echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Falha ao se conectar: " . $e->getMessage();
}
?>
