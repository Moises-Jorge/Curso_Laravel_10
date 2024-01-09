<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rota responsavel pelos "contacts"  CRIAR MAIS TARDE

// Rota para listagem do Fórum/Suporte (pedido de suporte)
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
