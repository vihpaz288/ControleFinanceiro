<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public function receita()
    {
        $contas = Conta::where('IdUsers', auth()->user()->id)->get();
        return view ('Conta.receita', compact('contas'));
    }
    public function store(Request $request)
    {
       $receita = Receita::create($request->all());
       $conta = Conta::find($receita->IdContas);
       $soma = $receita->valor + $conta->saldo;
       $atualizarSaldo = $conta->update([
        'saldo' => $soma
    ]);

       $IdReceita = $receita->Users_id;
        return redirect()->back();
    }
}





