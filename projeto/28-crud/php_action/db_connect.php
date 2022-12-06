<?php

//conexao com DB

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo "Erro ao conectar no banco de dados. erro".mysqli_connect_error();
}