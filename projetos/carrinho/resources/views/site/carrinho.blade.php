@extends('site.layout')
@section('title', 'Carrinho')
@section('conteudo')


<div class="row container">

  @if ($mensagem = Session::get('sucesso'))
  

  <div class="card green">
    <div class="card-content white-text">
      <span class="card-title">Parabéns!</span>
      <p>{{$mensagem}}</p>
    </div>
  </div>

  @endif

  @if($itens->count() == 0)
  <div class="card orange">
    <div class="card-content white-text">
    <span class="card-title">Você não possui nenhum item no carrinho</span>
    <p>Aproveiate nossas promoções</p>
  </div>
  </div>
  @else
  <h5>Seu carrinho possui {{ $itens->count()}}  produtos.</h5>

 

  <table class="striped">
      <thead>
        <tr> 
            <th></th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th></th>
        </tr>
      </thead>

      <tbody>
      @foreach ($itens as $item)
        <tr>
          <td><img src="{{$item->attributes->image}}" alt="" width="300" class="responsive-img circle">  </td>

          <td>{{$item->name}}</td>
          <td>R${{number_format ($item->price, 2,',','.')}}</td>

          {{--BTN ATUALIZAR--}}
          <form action="{{route('site.atualizacarrinho')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <input type="hidden" name="id" value="{{$item->id}}">
          <td><input style="width: 40px; font-weight:900;" type="number" min="1" name="quantity" value="{{$item->quantity}}"></td>
          <td>  <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>

          </form>

           {{--BTN DELETAR--}}
            <form action="{{route('site.removecarrinho')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <input type="hidden" name="id" value="{{$item->id}}">
            <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
          </form>

          </td>
        </tr>    
        @endforeach
      </tbody>
    </table>
    <div class="card orange">
      <div class="card-content white-text">
      <span class="card-title">Valor total: R${{number_format( \Cart::getTotal(), 2,',','.')}}</span>
      </div>
    </div>
  @endif
   

      <div class="row container center">

        <form action="{{route('site.index')}}" method="GET" enctype="multipart/form-data">
          <button class="btn-large waves-effect waves-light blue">Continuar comprando<i class="material-icons right">arrow_back</i></button>
        </form>
        {{--BTN LIMPAR--}}
        <form action="{{route('site.limparcarrinho')}}" method="GET" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" >
          <button class="btn-large waves-effect waves-light blue">Limpar carringo <i class="material-icons right">clear</i></button>

        </form>

        <button class="btn-large waves-effect waves-light green">Finalizar pedido <i class="material-icons right">check</i></button>
      </div>
            
       

 </div>



    <div class="row center">
        
    </div>








@endsection