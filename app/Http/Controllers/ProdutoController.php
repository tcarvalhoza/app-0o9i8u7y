<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        
    }
    
    public function visualizar($id = null){
        
        $produto = ['id' => 1, 'sku' => 'AM100', 'quantidade' => 100];
        
        return view('produto', ['id' => $id, 'produto' =>$produto]);
    }
    
    public function criar(){
        
        return view('produto.criar');
    }
    
    public function listar(){
        $listarProdutos = Produto::all();
    
        return view('produto.listar', ['listarProdutos'=>$listarProdutos]);
    }
}
