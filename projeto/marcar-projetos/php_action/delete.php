<?php
session_start();

include_once '../db_conexao.php';



function delete ($input){
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-deletar'])){
    $id = mysqli_escape_string($connect, $_POST['id']);

     $sql = "DELETE FROM Projetos WHERE id = '$id'";
     if (mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Projeto deletado com sucesso!";
            header('Location: ../index.php');
        }
        else{
        $_SESSION['mensagem'] = "Erro ao deletar";
            header('Location: ../index.php');
        }
}