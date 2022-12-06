<?php
    /*
    session_start();
    if(isset($_SESSION['nome'])){  
    echo $_SESSION['nome'];
    }
    */

    session_start();  //destruir variavel da session  "session_destroy" destroir todas as session.
    unset($_SESSION['nome']);
?>