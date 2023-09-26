<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function conta()
    {
        return view ('Conta.conta');
    }
    public function store(Request $request)
    {
        
       $Conta = Conta::create($request->all());
        $idUsers = $Conta->Users_id;
        return view('Conta.conta');
    }
    public function destroy()
    {
        Conta::FindOrFail($id)->delete();
        return view('Usuario.acesso');
    }
}
