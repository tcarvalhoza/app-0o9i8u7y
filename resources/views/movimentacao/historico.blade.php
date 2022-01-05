@extends('layouts.movimentacao')

@section('title', 'Histórico de Movimentações')

@section('content')

<div id="produtos-container"  class="container">
    <h2>Histórico de Movimentações</h2>
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
            Tipo:
        </div>
        <div class="col">
            Quantidade:
        </div>
        <div class="col">
            Data/Hora:
        </div>
    </div>
    @foreach ($movimentacoes as $m)
    <div id="cards-container" class="row">
        <div class="col">
            {{$m->id}}
        </div>
        <div class="col">
            {{$m->produto->nome}}
        </div>
        <div class="col">
            {{$m->sku}}
        </div>
        <div class="col">
            @if ($m->tipo == 'RM')  
            <span class="badge bg-danger">{{$m->tipo}}</span>
            @elseif ($m->tipo == 'ADD')
            <span class="badge bg-success">{{$m->tipo}}</span>
            @endif
        </div>
        <div class="col">
            {{$m->quantidade}}
        </div>
        <div class="col">
            {{$m->created_at->format('Y-m-d H:i:s')}}
        </div>
    </div>

    @endforeach
    <br>
    {{$movimentacoesJson}}
</div>


@endsection