@extends ('layout.layout')

@section ('title')

@section ('conteudo')
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo cliente </h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="descrição" id="descrição">
                <label for="descrição">Descrição</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="imagem" id="imagem">
                <label for="imagem">Imagem</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="tamanho" id="tamanho">
                <label for="tamanho">Tamanho</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo">
                <label for="modelo">Modelo</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn blue"> Cadastrar </button>

            <a href="index" type="submit" class="btn green"> Lista de clientes </a>


        </form>
    </div>
</div>

@endsection