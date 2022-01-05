@extends('layouts.main')

@section('title', 'Detalhes da Movimentação')

@section('content')

<div id="produtos-container" class="col-md-12">
    <h3>Detalhes da Movimentação:</h3>
    
    <div class="card" style="width: 18rem;">
        <div class="card-header">
        SKU: {{$movimentacao->sku}}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{$movimentacao->id}}</li>
            <li class="list-group-item">Nome do Produto: {{$movimentacao->produto->nome}}</li>
            <li class="list-group-item">
                Tipo: @if ($movimentacao->tipo == 'RM')  
                <span class="badge bg-danger">{{$movimentacao->tipo}}</span>
                @elseif ($movimentacao->tipo == 'ADD')
                <span class="badge bg-success">{{$movimentacao->tipo}}</span>
                @endif
            </li>
            <li class="list-group-item">Quantidade: {{$movimentacao->quantidade}}</li>
            <li class="list-group-item"><a href="/movimentacao/deletar/{{$movimentacao->id}}" class="btn btn-danger">Deletar</a></li>
        </ul>
    </div>
</div>

@endsection