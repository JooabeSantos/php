@extends('site.layout')
@section('title', 'Details')
@section('conteudo')

    
    <div class="row container">
        <div class="col s12 m6">
            <img src="{{$produto->imagem}}" class="responsive-img">
        </div>
    

        <div class="col s12 m6">
            <h4>{{$produto->nome}}</h4>
            
            <p>{{$produto->descricao}}</p>
            <p>Postado por: {{$produto->user->lastName}}<br></p>


            <form action="{{route('site.addcarrinho')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$produto->id}}">
                <input type="hidden" name="name" value="{{$produto->nome}}">
                <input type="hidden" name="price" value="{{$produto->preco}}">
                <input type="number" min="1" name="qnt" value="1">
                <input type="hidden" name="img" value="{{$produto->imagem}}">
            <button class="btn orange"> Comprar </button>

            </form>
        </div>
    </div>

@endsection