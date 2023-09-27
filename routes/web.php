<?php

use App\Http\Controllers\ContaController;
use App\Http\Controllers\DespesaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios;
use App\Models\Conta;
use App\Models\Receita;

Route::get('Usuario/home', [LoginController::class, 'home'])->name('home');
Route::get('/Usuario/acesso', [LoginController::class, 'acesso'])->name('acesso');
Route::get('/Usuario/create', [LoginController::class, 'create'])->name('create');
Route::post('/Usuario/store', [LoginController::class, 'store'])->name('store');
Route::get('/Usuario/login', [LoginController::class, 'login'])->name('login');
Route::post('/Usuario/autenticacao', [LoginController::class, 'autenticacao'])->name('autenticacao');
Route::get('/Usuario/sair', [LoginController::class, 'sair'])->name('sair');

Route::get('/Conta/conta', [ContaController::class, 'conta'])->name('conta');
Route::post('/Conta/store', [ContaController::class, 'store'])->name('Conta.store');
Route::get('/Conta/edit/{id}', [ContaController::class, 'edit'])->name('edit');
Route::put('/Conta/update/{id}', [ContaController::class, 'update'])->name('update');
Route::delete('/Conta/delete/{id}', [ContaController::class, 'destroy'])->name('destroy');

Route::get('/Receita/receita', [ReceitaController::class, 'receita'])->name('receita');
Route::post('/Receita/store', [ReceitaController::class, 'store'])->name('receita.store');

Route::get('/Despesa/despesa', [DespesaController::class, 'despesa'])->name('despesa');
Route::post('/Despesa/store', [DespesaController::class, 'store'])->name('despesa.store');



Route::get('/Conta/relatorio', [ContaController::class, 'relatorio'])->name('relatorio');
Route::get('/Conta/ganhos', [ContaController::class, 'ganhos'])->name('ganhos');
Route::get('/Conta/gastos', [ContaController::class, 'gastos'])->name('gastos');

// Route::get('/gasto', [Usuarios::class, 'gasto'])->name('gasto');
// Route::get('/ganho', [Usuarios::class, 'ganho'])->name('ganho');