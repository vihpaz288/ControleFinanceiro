<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios;

Route::get('/Usuario/create', [LoginController::class, 'create'])->name('create');
Route::post('/Usuario/store', [LoginController::class, 'store'])->name('store');
Route::get('/Usuario/login', [LoginController::class, 'login'])->name('login');
Route::post('/Usuario/autenticacao', [LoginController::class, 'autenticacao'])->name('autenticacao');
Route::get('/Usuario/sair', [LoginController::class, 'sair'])->name('sair');

Route::post('/Acesso/receita', [ReceitaController::class, 'receita'])->name('receita');


// Route::get('/home', [Usuarios::class, 'home'])->name('home');
// Route::get('/login', [Usuarios::class, 'login'])->name('login');
// Route::get('/cadastro', [Usuarios::class, 'cadastro'])->name('cadastro');
// Route::get('/acesso', [Usuarios::class, 'acesso'])->name('acesso');
// Route::get('/saldo', [Usuarios::class, 'saldo'])->name('saldo');
// Route::get('/relatorio', [Usuarios::class, 'relatorio'])->name('relatorio');
// Route::get('/gasto', [Usuarios::class, 'gasto'])->name('gasto');
// Route::get('/ganho', [Usuarios::class, 'ganho'])->name('ganho');