<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class MovimentacaoController extends Controller
{
    public function criar(){
        
        $produtos = Produto::all(['id', 'nome']);
        
//        var_dump($produtos);exit;
        
        return view('movimentacao.criar', ['produtos' =>$produtos]);
    }
    
}
