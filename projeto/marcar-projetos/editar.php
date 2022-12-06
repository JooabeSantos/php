<?php

include_once 'db_conexao.php';
// Header
include_once 'includes/header.php';

if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM Projetos WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>


<div class="row ">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar projeto</h3>
        <form action="php_action/update.php" method="POST">
        <div class="input-field col s12">
            <input class="grey-text text-darken-1" type="text" name="Projetos" id="Projetos" value="<?php echo $dados['Projetos']; ?>">
            <label class="white-text" for="Projetos">Nome do projeto</label>   
        </div>
        <div class="input-field col s12">
            <input class="grey-text text-darken-1" type="text" name="linguagens" id="linguagens" value="<?php echo $dados['linguagens']; ?>">
            <label class="white-text" for="linguagens">Linguagens usadas</label> 
        </div>

        <div class="input-field col s12">
            <input class="grey-text text-darken-1" type="time" name="tempop" id="tempop" value=" <?php echo $dados['tempop']; ?>">
            <label class="white-text" for="tempop">Tempo gasto</label>   
        </div>


        <button type="submit" name="btn-editar" class="btn green accent-2"> Atualizar </button>

            <a href="index.php" type="submit" class="btn green"> Lista de clientes </a>
        </form>
    </div>
</div>




<?php
//footer
include_once 'includes/footer.php';
?>