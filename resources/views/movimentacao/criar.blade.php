@extends('layouts.main')

@section('title', 'Movimentar Produto')

@section('content')


<div id="produto-create-container" class="col-md-10 offset-md-1">
    <h1>Movimentar um Produto: </h1>
    <form action="/movimentacao" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Escolha o Produto:</label>
            <select class="custom-select">
                @foreach ($produtos as $p)
                    <option value="{{$p->sku}}">{{$p->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nome">Escolha a movimentação:</label>
            <select class="custom-select">
                <option value="ADD">Adicionar</option>
                <option value="RM">Remover</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" id="quantidade"  name="quantidade" required="" placeholder="Quantidade">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Criar Movimentação">
    </form>
</div>
@endsection