<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
    <?php include 'style.css'; ?>
</style>
    <title>Noticias</title>
</head>
<body>

<main>
    <nav>
        <div class="nav-wrapper blue lighten-2">
         
          <form action="">
            <a href="home.php" class="brand-logo">Home</a>
            <ul class="right hide-on-med-and-down">
              <li><a class="btn blue lighten-2" href="adicionar.php">Cadastrar noticias</a></li>
              <li><a href="home.php" class="btn blue lighten-2">Exibir noticias</a></li>


              <form action="../php_action/search.php" method="GET">
                  <li><input name="search" id="search" type="search" required></li>
                  <li><label class="label-icon" for="search"><i class="material-icons">search</i></label></li>
                  <li> <i class="material-icons">close</i></li>
                </form>
                </ul>
          </form>
         
            </div>
            
    
        </div>
      </nav>
</main>

    
