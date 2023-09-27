<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Despesa;
use App\Models\Receita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContaController extends Controller
{
    public function relatorio()
    {
        return view('Usuario.relatorios');
    }
    public function ganhos()
    {
        $ganhos = Receita::with('conta')->get();
        $dataAtual = date('d-m-Y H:i:s');
        return view('Usuario.ganhos', compact('dataAtual', 'ganhos'));
    }
    public function gastos()
    {
        $gastos = Despesa::with('conta')->get();
        $dataAtual = date('d-m-Y H:i:s');
        return view('Usuario.gastos', compact('dataAtual', 'gastos'));
    }
    public function conta()
    {
        return view('Conta.conta');
    }
    public function store(Request $request)
    {

        $Conta = Conta::create($request->all());
        $idUsers = $Conta->Users_id;
        return view('Conta.conta');
    }
    public function destroy($id)
    {
        Conta::FindOrFail($id)->delete();
        return view('Usuario.acesso');
    }
    public function edit($id)
    {
        $conta = Conta::Find($id);
        return view('Conta.edit', compact('conta'));
    }
    public function update(Request $request, $id)
    {
        Conta::FindOrFail($id)->update($request->all());
        return redirect()->route('acesso');
    }
}
