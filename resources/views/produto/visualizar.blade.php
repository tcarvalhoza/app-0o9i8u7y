@extends('layouts.main')

@section('title', 'Detalhes do Produto')

@section('content')

<div id="produtos-container" class="col-md-12">
    <h3>Detalhes do Produto:</h3>
    
    <div class="card" style="width: 18rem;">
        <div class="card-header">
        SKU: {{$produto->sku}}
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">ID: {{$produto->id}}</li>
          <li class="list-group-item">Nome: {{$produto->nome}}</li>
          <li class="list-group-item">Quantidade: {{$produto->quantidade}}</li>
          <li class="list-group-item"><a href="/produto/deletar/{{$produto->id}}" class="btn btn-danger">Deletar</a></li>
        </ul>
    </div>
</div>

@endsection