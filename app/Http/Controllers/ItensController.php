<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itens;

class ItensController extends Controller
{
    public function index()
    {
        $itens = Itens::all();
        return view('itens.index', compact('itens'));
    }

    public function store(Request $request)
    {
        $itens = new Itens();
        $itens->qtd_itens = $request->input('qtd_itens');
        $itens->fk_planta = $request->input('fk_planta');
        $itens->save();

        return redirect()->back()->with('success', 'Lista de Itens inserida com sucesso.');
    }

    public function show($id)
    {
        $item = Itens::findOrFail($id);
        return view('itens.show', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $itens = Itens::findOrFail($id);
        $itens->qtd_itens = $request->input('qtd_itens');
        $itens->fk_planta = $request->input('fk_planta');
        $itens->save();

        return redirect()->back()->with('success', 'Lista de Itens atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $itens = Itens::findOrFail($id);
        $itens->delete();

        return redirect()->back()->with('success', 'Lista de Itens excluída com sucesso.');
    }
}
