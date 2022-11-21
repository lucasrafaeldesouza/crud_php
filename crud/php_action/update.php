<?php
session_start();
//Conexão 
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])): 
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $cargo = mysqli_escape_string($connect, $_POST['cargo']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade', cargo = '$cargo', numero = '$numero'
    WHERE id = '$id' ";

    if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso";
        header('Location: ../clientes.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";      
        header('Location: .../clientes.php');
    endif;
endif;
