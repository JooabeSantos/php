<?php
require_once'db_connect.php';

session_start();

if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>
    <link rel="stylesheet" href="./portifolio/style.css">
    <link rel="shortcut icon" href="imagens/codificacao.ico" type="image/x-icon">
</head>
<body>
    <div class="sectio-1-bg">
        <aside>
            <div class="icon-menu">
                    <div class="nav">
                     <a href="#main-title" title="Página Inícial">Home</a>
                     <a href="#skills" title="Html">Skills</a>
                     <a href="#projects">Projects</a>
                     <a href="#C-rodapé">About</a>
            </div>
        </aside>
    

        <div id="main-title">
            <h1>Eu sou Joabe</h1>
            <h2>Sou desenvolverodr front-end e back-end</h2>
            <h5>Trabalho com freelancer</h5>
            <a href="logout.php"><button class="btn">Voltar</button></a>

            <div class="numeros">
                <div class="title">
                    <h3>5</h3>
                    <p>Projetos</p>
                </div>

                <div class="title">
                    <h3>6 Meses</h3>
                    <p>Tempo como programador</p>
                </div>

            </div>  
        </div>
    </div>

    <section class="C-sobre" data-aos="fade-up">
        <div class="image">
            <img src="" alt="">
        </div>

        <div class="sobre-mim">
            <h1>Sobre mim</h1>
            <h4>Desenvolvedor back-end & <span>front-end</span></h4>
            <p> Meu nome é Joabe Olivera Santos, Tenho 18 anos e estou na área da programação a 6 meses e a cada dia procurando melhorar mais e mais. Sou Desenvolvedor Front-end e Back-end. </p>

        </div>
    </section>

    <section class="Container" data-aos="fade-up">
        <h1 id="skills">Skills</h1>
        <p>Abaixo está algumas linguagens de programação e linguagem de marcação.  </p>
        <div class="C-card" data-aos="fade-up">
            <div class="Card">
                <img src="imagens/html.png" alt="phone">
                <h3>HTML</h3>
                <h4></h4>
            </div><!--Card-->

            <div class="Card">
                <img src="imagens/css.png" alt="desktop">
                <h3>CSS</h3>
                <h4></h4>
            </div><!--Card-->

            <div class="Card">
                <img src="imagens/js.png" alt="grafico">
                <h3>Java Script</h3>
                <h4></h4>
            </div><!--Card-->
        </div><!--C-card-->

        <div class="C-card-2" data-aos="fade-up">

            <div class="Card">
                <img src="imagens/php.png" alt="computador">
                <h3>PHP</h3>
                <h4></h4>
            </div><!--Card-->

        </div><!--C-card-2-->
    </section><!--conatiner-->


    <section class="C-projetos" data-aos="fade-up">
        <h1 id="projects">Meus projetos</h1>
        <p>Alguns dos meus projetos Front-end </p>
        <div class="img-projetos" data-aos="fade-up">
            <a target="_blank" href="https://jooabesantos.github.io/html-css/projetos/tela-de-login/"><img src="imagens/projeto-tela-de-login.png" alt="projeto"></a>
            <a target="_blank" href="https://jooabesantos.github.io/html-css/projetos/nlw/"><img src="imagens/calendario-copa.png" alt="projeto"></a>
        </div><!--img-projetos-->
        <div class="img-2">
            <a target="_blank" href="https://jooabesantos.github.io/html-css/trabalhos/trabalho1/"><img src="imagens/projeto.png" alt="projeto"></a>
        </div>
    </section><!--C-projetos-->

    <section id="C-rodapé" >
        <h1>Me envie uma mensagem para fechar um projeto</h1>
        <a href="https://github.com/JooabeSantos"><img src="imagens/githubicon.png" alt="icone do githubi"></a>
        <a href="https://www.linkedin.com/in/joabe-santos-0947aa254/"><img src="imagens/linkedin-icon.png" alt=""></a>
    </section><!--C-rodapé-->
        </div>
    </section>


</body>
</html>