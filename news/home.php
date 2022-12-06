<?php


include_once 'includes/header.php';
include_once 'php_action/db_connect.php';

?>








  <div id="conteudo">
        <?php
            $sql = "SELECT * FROM news";
            $resultados = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultados) > 0){
                while($dados = mysqli_fetch_array($resultados)){

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
  }
}
          ?>
</div>

<?php

include_once 'includes/footer.php';

?>

