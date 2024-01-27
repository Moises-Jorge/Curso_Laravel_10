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

// Rota responsavel pela Edicao dos registros
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

// Rota responsavel por actulizar as edicoes feitas nos registos
//Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');