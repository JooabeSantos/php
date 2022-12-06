@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')


    

<div class="row container">
    @foreach ($produtos as $produto)
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="{{$produto->imagem}}">
          <span class="card-title white-text"></span>
          <a href="{{$produto->imagem}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
        </div>
        <div class="card-content">
            <p style="text-overflow: ellipsis;">{{ Str::limit( $produto->nome, ) }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>


  <a class="waves-effect waves-light btn-small"><i class="material-icons left">publish</i>Adicionar</a>
@endsection