<?php

use App\Http\Controllers\ContaController;
use App\Http\Controllers\DespesaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios;
use App\Models\Receita;

Route::get('Usuario/home', [LoginController::class, 'home'])->name('home');
Route::get('/Usuario/acesso', [LoginController::class, 'acesso'])->name('acesso');
Route::get('/Usuario/create', [LoginController::class, 'create'])->name('create');
Route::post('/Usuario/store', [LoginController::class, 'store'])->name('store');
Route::get('/Usuario/login', [LoginController::class, 'login'])->name('login');
Route::post('/Usuario/autenticacao', [LoginController::class, 'autenticacao'])->name('autenticacao');
Route::get('/Usuario/sair', [LoginController::class, 'sair'])->name('sair');

Route::get('/Conta/conta', [ContaController::class, 'conta'])->name('conta');
Route::post('/Conta/store', [ContaController::class, 'store'])->name('store');
Route::delete('/Conta/{id}', [ContaController::class, 'destroy'])->name('destroy');

Route::get('/Conta/receita', [ReceitaController::class, 'receita'])->name('receita');
Route::post('Conta/store', [ReceitaController::class, 'store'])->name('store');

Route::post('Conta/store', [DespesaController::class, 'store'])->name('store');
Route::get('/Conta/despesa', [DespesaController::class, 'despesa'])->name('despesa');

// Route::post('/Acesso/receita', [ReceitaController::class, 'receita'])->name('receita');

// Route::get('/login', [Usuarios::class, 'login'])->name('login');
// Route::get('/cadastro', [Usuarios::class, 'cadastro'])->name('cadastro');
// Route::get('/acesso', [Usuarios::class, 'acesso'])->name('acesso');
// Route::get('/saldo', [Usuarios::class, 'saldo'])->name('saldo');
// Route::get('/relatorio', [Usuarios::class, 'relatorio'])->name('relatorio');
// Route::get('/gasto', [Usuarios::class, 'gasto'])->name('gasto');
// Route::get('/ganho', [Usuarios::class, 'ganho'])->name('ganho');