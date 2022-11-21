<?php
session_start();
//Conexão 
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])): 
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $cargo = mysqli_escape_string($connect, $_POST['cargo']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade, cargo, numero) 
            VALUES ('$nome', '$sobrenome', '$email' ,'$idade', '$cargo', '$numero')";

    if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso";
        header('Location: ../clientes.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";      
        header('Location: .../clientes.php');
    endif;
endif;
