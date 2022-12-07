<link rel="stylesheet" href="includes/style.css">
<?php


include_once 'includes/header.php';


?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Nova noticia </h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" required>
                <label for="nome">Nome da noticia</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="noticia" id="noticia" required>
                <label for="noticia">Noticia</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="categoria" id="categoria" required>
                <label for="categoria">Categoria</label>
            </div>

          <button type="submit" name="btn-cadastrar" class="btn blue"> Cadastrar </button>

          <a href="home.php" type="submit" class="btn green"> Lista de noticias </a>

        </form>
     

        
          
       
    </div>
</div>


<?php
include_once 'includes/footer.php';
?>
    <script>
    window.onload = function(){
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
