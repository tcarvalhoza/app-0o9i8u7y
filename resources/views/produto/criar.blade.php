@extends('layouts.main')

@section('title', 'Criar Produto')

@section('content')


<div id="produto-create-container" class="col-md-10 offset-md-1">
    <h1>Cadastre um Produto: </h1>
    <form action="/produtos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required="" placeholder="Nome do Produto">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" id="quantidade"  name="quantidade" required="" placeholder="Quantidade de Produtos">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Criar produto">
    </form>
</div>
@endsection