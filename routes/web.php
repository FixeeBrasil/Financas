<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\App\DashboardController;

use App\Http\Controllers\App\Categoria\CategoriaMovimentacaoController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});


// Categoria de Movimentação
Route::resource('categoria-movimentacao', CategoriaMovimentacaoController::class);
