<?php

    session_start();   
    setcookie('nome','Joabe',time() + (60*60*24),'/');
    //para deletar o cookie é só colocar um valor negativo.

    echo $_COOKIE['nome'];

?>