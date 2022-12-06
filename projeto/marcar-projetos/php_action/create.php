<?php
session_start();

include_once '../db_conexao.php';



function clear ($input){
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])){
    $projeto = clear($_POST['Projetos']);
    $linguagens = clear($_POST['linguagens']);
    $tempop = clear($_POST['tempop']);


     $sql = "INSERT INTO Projetos (Projetos, linguagens, tempop) VALUES ('$projeto', '$linguagens', '$tempop')";

     if (mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Projeto cadastrado com sucesso!";
            header('Location:../index.php');
        }

        else{
        $_SESSION['mensagem'] = "Erro ao cadastrar";
            header('Location:../index.php');
        }
}
    


