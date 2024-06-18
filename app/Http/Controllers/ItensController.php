<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itens;
use App\Models\Planta; // Importe o modelo Planta

class ItensController extends Controller
{
    public function index()
    {
        $itens = Itens::all();
        return view('itens.index', compact('itens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'qtd_itens' => 'required|integer',
            'fk_planta' => 'required|exists:planta,id_planta', // Validação para garantir que fk_planta exista em planta
        ]);

        $itens = new Itens();
        $itens->qtd_itens = $request->input('qtd_itens');
        $itens->fk_planta = $request->input('fk_planta');
        $itens->save();

        return redirect()->back()->with('success', 'Item do Pedido inserido com sucesso.');
    }

    public function show($id_itens)
    {
        $item = Itens::findOrFail($id_itens);
        return view('itens.show', compact('item'));
    }

    public function update(Request $request, $id_itens)
    {
        $request->validate([
            'qtd_itens' => 'required|integer',
            'fk_planta' => 'required|exists:planta,id_planta', // Validação para garantir que fk_planta exista em planta
        ]);

        $itens = Itens::findOrFail($id_itens);
        $itens->qtd_itens = $request->input('qtd_itens');
        $itens->fk_planta = $request->input('fk_planta');
        $itens->save();

        return redirect()->back()->with('success', 'Item do Pedido atualizado com sucesso.');
    }

    public function destroy($id_itens)
    {
        $itens = Itens::findOrFail($id_itens);
        $itens->delete();

        return redirect()->back()->with('success', 'Item do Pedido excluído com sucesso.');
    }
}
