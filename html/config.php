<?php
    if(isset($_POST['cadastrar'])) {
        $nome = $_POST["firstname"];
        $sobrenome = $_POST["lastname"];
        $email = $_POST["email"];
        $celular = $_POST["number"];
        $senha = $_POST["password"];
        $check_senha = $_POST["Confirmpassword"];
        $genero = $_POST["gender"];
    }

    if($senha != $check_senha) {
        die("As senhas não correspondem");
    } 

    $host = "localhost";
    $banco = "formularioteste";
    $user = "root";
    $senha_user = "";

    $con = mysqli_connect($host, $banco, $user, $senha_user);

    if(!$con) {
        die("Conexão Falhou." . mysqli_connect_error());
    }

    $sql = "INSERT INTO clientes(primeiro_nome, sobrenome, e_mail, celular, senha, genero) VALUES ('$nome', '$sobrenome', '$email', '$celular', '$senha', '$genero')";

    $rs = mysql-query($con, $sql);

    if($rs) {
        echo("Cadastro Efetuado com Sucesso!");
    }



?>