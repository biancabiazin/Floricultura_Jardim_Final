<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planta;

class PlantaController extends Controller
{
    public function index()
    {
        $plantas = Planta::all();
        return view('plantas.index', compact('plantas'));
    }

    public function store(Request $request)
    {
        $planta = new Planta();
        $planta->nome = $request->input('nome');
        $planta->especie = $request->input('especie');
        $planta->preco = $request->input('preco');
        $planta->qtd_estoque = $request->input('qtd_estoque');
        $planta->tamanho = $request->input('tamanho');
        $planta->save();

        return redirect()->back()->with('success', 'Planta inserida com sucesso.');
    }

    public function show($id_planta)
    {
        $planta = Planta::findOrFail($id_planta);
        return view('plantas.show', compact('planta'));
    }

    public function update(Request $request, $id_planta)
    {
        $planta = Planta::findOrFail($id_planta);
        $planta->nome = $request->input('nome');
        $planta->especie = $request->input('especie');
        $planta->preco = $request->input('preco');
        $planta->qtd_estoque = $request->input('qtd_estoque');
        $planta->tamanho = $request->input('tamanho');
        $planta->save();

        return redirect()->back()->with('success', 'Planta atualizada com sucesso.');
    }

    public function destroy($id_planta)
    {
        $planta = Planta::findOrFail($id_planta);
        $planta->delete();

        return redirect()->back()->with('success', 'Planta excluída com sucesso.');
    }
}
