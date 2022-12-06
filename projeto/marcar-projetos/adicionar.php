<?php


// Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo projeto</h3>
        <form action="php_action/create.php" method="POST">
        <div class="input-field col s12">
            <input type="text" name="Projetos" id="Projetos">
            <label for="Projetos">Nome do projeto</label>   
        </div>
        <div class="input-field col s12">
            <input type="text" name="linguagens" id="linguagens">
            <label for="linguagens">Linguagens usadas</label>   
        </div>

        <div class="input-field col s12">
            <input type="time" name="tempop" id="tempop">
            <label for="tempop">Hora do inicio</label>   
        </div>


        <button type="submit" name="btn-cadastrar" class="btn blue"> Cadastrar </button>

<a href="index.php" type="submit" class="btn green"> Lista de clientes </a>
        </form>
    </div>
</div>




<?php
//footer
include_once 'includes/footer.php';
?>