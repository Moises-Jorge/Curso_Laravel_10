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

// Routa para a criacao de uma nova duvida
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

// Rota responsavel por receber a nova duvida
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

// Rota que vai exibir os detalhes de um suporte/duvida
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');