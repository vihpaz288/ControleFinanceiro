<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuarios extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function login()
    {
        return view('Login');
    }
    public function cadastro()
    {
        return view('cadastro');
    }
    public function acesso()
    {
        return view('acesso');
    }
    public function relatorio()
    {
        return view('relatorios');
    }
    public function gasto()
    {
        return view('gastos');
    }
    public function ganho()
    {
        return view('ganhos');
    }
    public function saldo()
    {
        return view('saldo');
    }
}