<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/', [ProdutoController::class, 'listar']);
Route::get('/produto/criar', [ProdutoController::class, 'criar']);
Route::get('/produto/visualizar/{id?}', [ProdutoController::class, 'visualizar']);
