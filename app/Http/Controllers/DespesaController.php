<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    public function despesa()
    {
        $contas = Conta::where('IdUsers', auth()->user()->id)->get();
        return view('Conta.despesa', compact('contas'));
    }
    public function store(Request $request)
    {
        $despesa = Despesa::create($request->all());

        $conta = Conta::find($despesa->IdContas);

        $subtracao = $conta->saldo - $despesa->valor;

        $atualizarSaldo = $conta->update([
            'saldo' => $subtracao
        ]);

        $idDespesas = $despesa->Users_id;
        return redirect()->back();
    }

    public function pesquisa(Request $request)
    {
        $gastos = Despesa::where('descricao', 'LIKE', "%$request->pesquisa%")->get();
        return view('Usuario.table-despesa', compact('gastos'));
    }
}
