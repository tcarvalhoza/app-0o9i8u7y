@extends('layouts.main')

@section('title', 'Produtos Cadastrados')

@section('content')

<div id="produtos-container"  class="container">
    <h2>Lista de Produtos</h2>
    @if (count($listarProdutos) == 0)
        <h5>Nenhum produto cadastrado</h5>
    @endif
    <div id="cards-container" class="row">
        <div class="col">
            ID:
        </div>
        <div class="col">
            Nome:
        </div>
        <div class="col">
            SKU:
        </div>
        <div class="col">
            Quantidade:
        </div>
        <div class="col">
            Ações
        </div>
    </div>
    @foreach ($listarProdutos as $l)
    <div id="cards-container" class="row">
      <div class="col">
        {{$l->id}}
      </div>
      <div class="col">
        {{$l->nome}}
      </div>
      <div class="col">
        {{$l->sku}}
      </div>
      <div class="col">
        {{$l->quantidade}}
      </div>
      <div class="col">
        <a href="/produto/visualizar/{{$l->id}}" class="btn btn-primary">Ver</a>
        @if (count($l->movimentacoes) == 0)
        <a href="/produto/deletar/{{$l->id}}" class="btn btn-danger">Deletar</a>
        @endif
        <a href="/movimentacao/criar/{{$l->id}}" class="btn btn-success">Movimentar</a>
        <a href="/movimentacao/historico/{{$l->id}}" class="btn btn-dark">Histórico</a>
      </div>
    </div>
    @endforeach

</div>

@endsection