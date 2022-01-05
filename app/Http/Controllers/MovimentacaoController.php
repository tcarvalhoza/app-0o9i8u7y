<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Movimentacao;

class MovimentacaoController extends Controller
{
    public function criar($id){
        
        $produto = Produto::findOrFail($id);
        
        return view('movimentacao.criar', ['produto' =>$produto]);
    }
    
    public function store(Request $request) {
        
        $produto = Produto::findOrFail($request->produto_id);
        
        $movimentacao = new Movimentacao;
        $movimentacao->produto_id = $produto->id;
        $movimentacao->sku = $produto->sku;
        $movimentacao->tipo = $request->tipo;
        $movimentacao->quantidade = $request->quantidade;
        $movimentacao->save();
        
        if($movimentacao->tipo == Movimentacao::TIPO_ADICIONAR){
            $produto->quantidade = ($produto->quantidade + $movimentacao->quantidade);
        } else if($movimentacao->tipo == Movimentacao::TIPO_REMOVER){
            $produto->quantidade = ($produto->quantidade - $movimentacao->quantidade);
        }
        
        $produto->save();
        
        return redirect('movimentacao/visualizar/'.$movimentacao->id);
    }
    
        
    public function visualizar($id){
        
        $movimentacao = Movimentacao::findOrFail($id);
        
        return view('movimentacao.visualizar', ['movimentacao' =>$movimentacao]);
    }
    
    public function historico($id){
        
        $produto = Produto::findOrFail($id);
        $movimentacoesJson = $produto->movimentacoes->toJson(JSON_PRETTY_PRINT);
        
        return view('movimentacao.historico', ['movimentacoes' =>$produto->movimentacoes, 'movimentacoesJson' => $movimentacoesJson]);
    }
    
    
    
//    $user->toJson(JSON_PRETTY_PRINT);
    
}
