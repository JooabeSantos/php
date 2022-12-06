<?php


session_start();

require_once 'db_connect.php';

function clear ($input){
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])){
    $nome = clear($_POST['nome']);
    $noticia = clear($_POST['noticia']);
    $categoria = clear($_POST['categoria']);

    $sql = "INSERT INTO news (nome, noticia, categoria) VALUES ('$nome', '$noticia', '$categoria')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../home.php');

    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../home.php');
    }

}