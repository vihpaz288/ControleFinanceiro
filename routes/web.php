<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios;

Route::get('/home', [Usuarios::class, 'home'])->name('home');
Route::get('/login', [Usuarios::class, 'login'])->name('login');
Route::get('/cadastro', [Usuarios::class, 'cadastro'])->name('cadastro');
Route::get('/acesso', [Usuarios::class, 'acesso'])->name('acesso');
Route::get('/saldo', [Usuarios::class, 'saldo'])->name('saldo');
Route::get('/relatorio', [Usuarios::class, 'relatorio'])->name('relatorio');
Route::get('/gasto', [Usuarios::class, 'gasto'])->name('gasto');
Route::get('/ganho', [Usuarios::class, 'ganho'])->name('ganho');