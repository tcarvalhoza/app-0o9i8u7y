@extends('layouts.main')

@section('title', 'Produtos Cadastrados')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Pesquise um Produto</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Digite o nome do produto" />
    </form>
</div>
<div id="produtos-container" class="col-md-12">
    <h2>Lista de Produtos</h2>
    <div id="cards-container" class="row">
        @foreach ($listarProdutos as $l)
        <div class="card col-md-3">
            <div class="card-body">
                <p class="card-nome">{{$l->id}}</p>
                <p class="card-sku">{{$l->sku}}</p>
                <p class="card-qtd">{{$l->quantidade}}</p>
                <a href="#" class="btn btn-primary">Ver produto</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection