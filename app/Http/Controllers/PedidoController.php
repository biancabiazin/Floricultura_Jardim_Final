<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->data_pedido = $request->input('data_pedido');
        $pedido->status_pedido = $request->input('status_pedido');
        $pedido->fk_cliente = $request->input('fk_cliente');
        $pedido->fk_funcionario = $request->input('fk_funcionario');
        $pedido->fk_itens = $request->input('fk_itens');
        $pedido->save();

        return redirect()->back()->with('success', 'Pedido inserido com sucesso.');
    }

    public function show($id_pedido)
    {
        $pedido = Pedido::findOrFail($id_pedido);
        return view('pedidos.show', compact('pedido'));
    }

    public function update(Request $request, $id_pedido)
    {
        $pedido = Pedido::findOrFail($id_pedido);
        $pedido->data_pedido = $request->input('data_pedido');
        $pedido->status_pedido = $request->input('status_pedido');
        $pedido->fk_cliente = $request->input('fk_cliente');
        $pedido->fk_funcionario = $request->input('fk_funcionario');
        $pedido->fk_itens = $request->input('fk_itens');
        $pedido->save();

        return redirect()->back()->with('success', 'Pedido atualizado com sucesso.');
    }

    public function destroy($id_pedido)
    {
        $pedido = Pedido::findOrFail($id_pedido);
        $pedido->delete();

        return redirect()->back()->with('success', 'Pedido excluído com sucesso.');
    }
}
