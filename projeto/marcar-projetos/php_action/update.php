<?php

session_start();

require_once '../db_conexao.php';

if(isset($_POST['btn-editar'])){
    $Projetos = mysqli_escape_string($connect,$_POST['Projetos']);
    $linguagens = mysqli_escape_string($connect,$_POST['linguagens']);
    $tempop = mysqli_escape_string($connect,$_POST['tempop']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE projetos SET Projetos = '$Projetos', linguagens = '$linguagens', tempop = '$tempop' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');

    }else{
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ../index.php');
    }
}

