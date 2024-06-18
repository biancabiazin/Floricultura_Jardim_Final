<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = Cidade::all();
        return view('cidades.index', compact('cidades'));
    }

    public function store(Request $request)
    {
        $cidade = new Cidade();
        $cidade->nome = $request->input('nome');
        $cidade->estado = $request->input('estado');
        $cidade->pais = $request->input('pais');
        $cidade->save();

        return redirect()->back()->with('success', 'Cidade inserida com sucesso.');
    }

    public function show($id_cidade)
    {
        $cidade = Cidade::findOrFail($id_cidade);
        return view('cidades.show', compact('cidade'));
    }

    public function update(Request $request, $id_cidade)
    {
        $cidade = Cidade::findOrFail($id_cidade);
        $cidade->nome = $request->input('nome');
        $cidade->estado = $request->input('estado');
        $cidade->pais = $request->input('pais');
        $cidade->save();

        return redirect()->back()->with('success', 'Cidade atualizada com sucesso.');
    }

    public function destroy($id_cidade)
    {
        $cidade = Cidade::findOrFail($id_cidade);
        $cidade->delete();

        return redirect()->back()->with('success', 'Cidade excluída com sucesso.');
    }
}
