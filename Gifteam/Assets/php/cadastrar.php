<?php 
include_once "conexao.php";

try {
   //variáveis que vão receber os conteúdos do formulário html
    $prim_nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $celular=$_POST['numero'];
    $senha=$_POST['senha'];
    $confirm_senha=$_POST['confirm_senha'];
    $genero=$_POST['genero'];

    if($senha != $confirm_senha) {
        die("As senhas digitadas não conferem!");
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_gifteam";


   //variável $conectar vem do arquivo conexao.php

   $sql=$conectar->prepare("INSERT INTO cu (prim_nome, sobrenome, email, celular, senha, genero) VALUES ('$prim_nome', '$sobrenome', '$email', '$celular', '$senha', '$genero')");
  
   $sql->execute();
   header("location: ../html/cadastro.html");
} catch (PDOException $e) {
    echo ("Erro: ". $e->getMessage());
}

?>