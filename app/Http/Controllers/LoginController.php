<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('Usuario.create');
    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return view('Usuario.login');
    }
    public function login()
    {
        return view('Usuario.login');
    }
    public function autenticacao(Request $request)
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('Usuario.acesso');
            // dd("Oii logado!!");
        }
    }
    public function sair()
    {
        Auth::logout();
        return view('home');
    }
}
