<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MovimentacaoController;

Route::get('/', [ProdutoController::class, 'produtos']);
Route::get('/produtos', [ProdutoController::class, 'produtos']);
Route::get('/produto/criar', [ProdutoController::class, 'criar']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/produto/visualizar/{id?}', [ProdutoController::class, 'visualizar']);
Route::get('/produto/deletar/{id?}', [ProdutoController::class, 'deletar']);
Route::get('/movimentacao/criar', [MovimentacaoController::class, 'criar']);
