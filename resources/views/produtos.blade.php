@extends('layouts.main')

@section('title', 'Produtos Cadastrados')

@section('content')

<div id="produtos-container"  class="container">
    <h2>Lista de Produtos</h2>
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
        <a href="/produto/visualizar/{{$l->id}}" class="btn btn-primary">Ver produto</a>
        <a href="/produto/deletar/{{$l->id}}" class="btn btn-danger">Deletar</a>
      </div>
    </div>
    @endforeach

</div>

@endsection