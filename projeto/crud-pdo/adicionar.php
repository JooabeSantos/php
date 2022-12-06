<?php

include 'includes/header.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo projeto</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Projeto</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="linguagens">
                <label for="linguagens">Linguagens usadas</label>

            </div>

            <div class="input-fild col s12">
                <input type="text" name="tempo_servico" id="tempo_servico">
                <label for="tempo_servico">Tempo de Servico</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn blue">Cadastrar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Projetos</a>
        </form>

    </div>

</div>

<?php
include_once 'includes/footer.php';
?>