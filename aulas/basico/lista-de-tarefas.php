<?php

    session_start();

    //Validando formulario
    
    if(isset($_POST['acao'])){
        //recupero o valor do unput
        $tarefa = strip_tags($_POST['tarefa']);

        //Verificar se existe seção tarefas
        if(!isset($_SESSION['tarefas'])){
            $_SESSION['tarefas'] = array();
            $_SESSION['tarefas'][] = $tarefa;
        }else{
            $_SESSION['tarefas'][] = $tarefa;
        }

        echo '<script>alert("Tarefa foi adicionada");</script>';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
    <style>
        form{
            max-width:600px;
            margin:10px auto;
            display: block;
        }
        input[type=text]{
            width: 100%;
            height: 40px;
            border: 1px solid #ccc;
            padding-left: 10px;
        }

        input[type=submit]{
            width: 100%;
            height: 40px;
            background-color: #069;
            color:white;
            font-size: 17px;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="tarefa" placeholder="Digite sua tarefa...">
        <input type="submit" name="acao" value="Enviar!">
    </form>
    <h3>Suas Tarefas atuais:</h3>
    <?php
        foreach ($_SESSION['tarefas'] as $key => $value) {
            echo '<p>'.$value.'</p>';
        }
    ?>
</body>
</html>