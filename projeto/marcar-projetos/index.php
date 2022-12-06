<link rel="stylesheet" href="style.css">
<?php
    include_once 'db_conexao.php';

    include_once 'includes/header.php';
//mensagem
    include_once 'includes/message.php';

    date_default_timezone_set('America/Sao_Paulo');

    $horario_atual = date("H:i:s");



?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Projetos </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome do projeto:</th>
                    <th>Linguagens usadas no projeto:</th>
                    <th>Tempo de trabalho no projeto:</th>
                    
                </tr>
            </thead>
            <tbody class="indigo lighten-5">
                <?php
                 $icon = 'play_arrow';
                    $sql = "SELECT * FROM projetos";
                    $resultados = mysqli_query($connect, $sql);

                    if(mysqli_num_rows($resultados) > 0){
                    while($dados = mysqli_fetch_array($resultados)){
                ?>
                  <tr>
                    <td><?php echo$dados['Projetos']; ?></td>
                    <td><?php echo$dados['linguagens']; ?></td>
                    <td><?php echo$horario_atual; ?></td>

                    <td><a href="php_action/start.php?id=<?php echo$dados['id'];?>" class="btn-floating indigo"><i class="material-icons">play_arrow</i></a></td>
                  

                    <td><a href="editar.php?id=<?php echo$dados['id']; ?>" class="btn-floating black"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?php echo$dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                        <h4>Opa!</h4>
                        <p>Tem certeza que deseja excluir esse cliente?</p>
                        </div>
                        <div class="modal-footer">
                        

                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>
                        </div>
                    </div>
                    
                  </tr>
                <?php
                }
                }
                ?>
        </tbody>
    </table>
        <a href="adicionar.php" class="btn indigo">Adicionar Projeto</a>
    </div>
</div>




<?php

echo date('h/i/s');


//footer
include_once 'includes/footer.php';
?>
