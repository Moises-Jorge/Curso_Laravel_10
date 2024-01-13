<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Rota responsavel pelos "contacts"
Route::get('/contato', [SiteController::class, 'contact']);

// Rota para listagem do Fórum/Suporte (pedido de suporte)
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
