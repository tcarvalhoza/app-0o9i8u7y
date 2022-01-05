<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Movimentacao;

class ProdutoController extends Controller
{
    public function index(){
        
    }
    
    public function visualizar($id = null){
        
        $produto = Produto::findOrFail($id);
        
        return view('produto.visualizar', ['produto' =>$produto]);
    }
    
    public function criar(){
        
        return view('produto.criar');
    }
    
    public function produtos(){
        $listarProdutos = Produto::all();
    
        return view('produtos', ['listarProdutos'=>$listarProdutos]);
    }
    
    public function store(Request $request) {
        
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->quantidade = $request->quantidade;
        $produto->sku = $this->gerarSku($request->nome);
        $produto->save();
        
        return redirect('produto/visualizar/'.$produto->id);
    }
    
    public function deletar($id){
        
        $produto = Produto::destroy($id);
        
        return redirect('produtos');
    }
    
    private function gerarSku($nome) {
        
        $sku = strtoupper(substr($nome, 0, 3) . substr(hash('md5', $nome), 0, 3));
        
        return $sku;
    }
    
}
