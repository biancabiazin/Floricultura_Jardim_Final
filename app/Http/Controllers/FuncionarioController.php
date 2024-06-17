<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }
  
    public function store(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $request->input('nome');
        $funcionario->cpf = $request->input('cpf');
        $funcionario->cargo = $request->input('cargo');
        $funcionario->salario = $request->input('salario');
        $funcionario->contato = $request->input('contato');
        $funcionario->save();

        return redirect()->back()->with('success', 'Funcionario inserido com sucesso.');
    }

    public function show($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.show', compact('funcionario'));
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->nome = $request->input('nome');
        $funcionario->cpf = $request->input('cpf');
        $funcionario->cargo = $request->input('cargo');
        $funcionario->salario = $request->input('salario');
        $funcionario->contato = $request->input('contato');
        $funcionario->save();

        return redirect()->back()->with('success', 'Funcionario atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return redirect()->back()->with('success', 'Funcionario excluído com sucesso.');
    }
}
