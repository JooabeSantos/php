<?php

session_start();

require_once '../db_conexao.php';

    $_SESSION['mensagem'] = "Projeto iniciado";
    header('Location: ../index.php');
