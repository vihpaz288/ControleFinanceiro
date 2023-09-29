<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Despesa;
use App\Models\Receita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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
    public function pdfGastos()
    {

        $user = User::with(['contas' => function ($query) {
            $query->withSum('despesas', 'valor');
            $query->with('despesas');
        }])->where('id', auth()->user()->id)->first();
        $valorTotal = null;
        foreach ($user->contas as $conta) {
            $valorTotal = $valorTotal + $conta->despesas_sum_valor;
        }
        $gastos = $user->contas;

        $pdf = PDF::loadview('Usuario.pdfGastos', compact('gastos', 'valorTotal'));
        return $pdf->setPaper('a4')->stream('Todas_despesas');
    }
    public function pdfGanhos()
    {

        $user = User::with(['contas' => function ($query) {
            $query->withSum('receitas', 'valor');
            $query->with('receitas');
        }])->where('id', auth()->user()->id)->first();
        $valorTotal = null;
        foreach ($user->contas as $conta) {
            $valorTotal = $valorTotal + $conta->receitas_sum_valor;
        }
        $ganhos = $user->contas;

        $pdf = PDF::loadview('Usuario.pdfGanhos', compact('ganhos', 'valorTotal'));
        return $pdf->setPaper('a4')->stream('Todas_despesas');
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
        $conta = Conta::Find($id);

        if (!$conta) {
            $response['erro']   = true;
            $response['msg']    = 'Conta não encontrada!';
            return response()->json($response, 404);
        }

        if (isset($conta) && $conta->delete()) {
            $response['error']  = false;
            $response['msg']    = 'Conta deletada com sucesso!';

            return response()->json($response, 200);
        }

        $response['erro']   = true;
        $response['msg']    = 'Erro ao deletar conta';
        $response['conta']  = $conta;
        return response()->json($response, 500);
    }
    public function edit($id)
    {
        $conta = Conta::Find($id);

        if ($conta) {
            $response['error']   = false;
            $response['conta']   = $conta;
            return response()->json($response, 200);
        }
    }
    public function update(Request $request, $id)
    {
        $conta = Conta::Find($id);
        
        if ($conta && $conta->update($request->all())) {
            $response['error'] = false;
            $response['msg'] = 'Conta atualizada com sucesso';
            return response()->json($response, 200);

        }
    }
}
