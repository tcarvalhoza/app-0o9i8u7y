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

Route::get('/movimentacao/criar/{id?}', [MovimentacaoController::class, 'criar']);
Route::post('/movimentacoes', [MovimentacaoController::class, 'store']);
Route::get('/movimentacao/visualizar/{id?}', [MovimentacaoController::class, 'visualizar']);
Route::get('/movimentacao/historico/{id?}', [MovimentacaoController::class, 'historico']);
