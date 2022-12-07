<?php

include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

include_once 'includes/message.php';

?>








  <div id="conteudo">
        <?php
          if (!isset($_GET['search'])){
            $sql = "SELECT * FROM news";
            $resultados = mysqli_query($connect, $sql);
            foreach ($resultados as $resultado){
            ?>

            
                <div class="services">  
                <div class="row ">
                <div class="col">
                  <div class="card small">
                    <div class="card-content">
                      <span class="card-title center"><?php echo $resultado['nome'] ?></span>
                      <p><?php echo $resultado['noticia']; ?></p>
                    </div>
                    <div class="card-action center">
                      <a href="#">Acessar</a>
                    </div>
                  </div>
                </div>
              </div>
              </div> 



            <?php
             }
          }else{
            $pesquisa = $_GET['search'];
            $sql_code = "SELECT * FROM news WHERE nome LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%'";

            $sql_query = $connect->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
     

            if ($sql_query->num_rows == 0) {       
               $_SESSION['mensagem'] = "Nenhuma noticia encontrada!";header('Location: /news/home.php');
               
            

            }else{
              while($dados = $sql_query->fetch_assoc()) {
        ?>
    <div class="services">  
    <div class="row ">
    <div class="col">
      <div class="card small">
        <div class="card-content">
          <span class="card-title center"><?php echo $dados['nome'] ?></span>
          <p><?php echo $dados['noticia']; ?></p>
        </div>
        <div class="card-action center">
          <a href="#">Acessar</a>
        </div>
      </div>
    </div>
  </div>
  </div> 
        
          <?php
          }
  }
}
          ?>
</div>

<?php

include_once 'includes/footer.php';

?>

