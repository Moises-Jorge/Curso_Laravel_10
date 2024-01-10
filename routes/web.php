<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Rota responsavel pelos "contacts"  CRIAR MAIS TARDE

// Rota para listagem do Fórum/Suporte (pedido de suporte)
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
