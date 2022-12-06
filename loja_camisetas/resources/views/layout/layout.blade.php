<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper blue lighten-2">
          <a href="#" class="brand-logo">Fake</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Produtos</a></li>
            <li><a href="badges.html">Categorias</a></li>
            <li><a href="badges.html"><i class="material-icons right">shopping_cart</i>carrinho</a></li>
          </ul>
        </div>
      </nav>

    @yield('conteudo')

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>