@extends('layouts.main')

@section('title', 'Movimentar Produto')

@section('content')


<div id="produto-create-container" class="col-md-10 offset-md-1">
    <h1>Movimentar um Produto: </h1>
    <form action="/movimentacoes" method="POST">
        @csrf
        <div class="form-group">
            <label for="sku">SKU: {{$produto->sku}}</label>
                <input type="hidden" value="{{$produto->id}}" id="produto_id" name="produto_id">

            </div>
        <div class="form-group">
            <label for="tipo">Escolha a movimentação:</label>
            <select class="custom-select" size="2" id="tipo" name="tipo">
                <option value="ADD">Adicionar</option>
                <option value="RM">Remover</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" id="quantidade"  name="quantidade" required="" placeholder="Quantidade">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Registrar Movimentação">
    </form>
</div>
@endsection