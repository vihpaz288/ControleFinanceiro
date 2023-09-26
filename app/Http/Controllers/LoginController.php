<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Despesa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function home()  
    {
    //     if (auth()->check()) {
    //         $despesas = Despesa::with('despesas')->where('usuarioID', auth()->user()->id)->get();
    //     } else {
    //         $despesas = 0;
    //     }
    //     $search = request('search');

    //     if ($search) {
    //         $despesas = Despesa::where([
    //             ['descricao', 'like', '%' . $search . '%']
    //         ])->get();
    //     } else {
    //         $despesas = Despesa::all();
    //     }

    //     return view('Usuario.home', compact('despesa', 'despesas'));
    // }
        return view('Usuario.home');
    }
      
    public function acesso()
    {
        $contas = Conta::where('IdUsers', auth()->user()->id)->get();
        return view('Usuario.acesso', compact('contas'));
    }
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
            return redirect()->route('acesso');
            // dd("Oii logado!!");
        }
    }
    public function sair()
    {
        Auth::logout();
        return view('Usuario.home');
    }
}
