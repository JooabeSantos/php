<?php


include_once 'php_action/db_connect.php';

include_once 'includes/header.php';


if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM news WHERE id = '$id'";
    $resultados = $mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultados);
}

?>


<div>
    <div>
        <h1><?php echo $dados['id'];  ?></h1>
    </div>
</div>


<?php

include_once 'includes/footer.php';