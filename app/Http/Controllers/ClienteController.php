<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->telefone = $request->input('telefone');
        $cliente->email = $request->input('email');
        $cliente->cpf = $request->input('cpf');
        $cliente->endereco = $request->input('endereco');
        $cliente->fk_cidade = $request->input('fk_cidade');
        $cliente->save();

        return redirect()->back()->with('success', 'Cliente inserido com sucesso.');
    }

    public function show($id_cliente)
    {
        $cliente = Cliente::findOrFail($id_cliente);
        return view('clientes.show', compact('cliente'));
    }

    public function update(Request $request, $id_cliente)
    {
        $cliente = Cliente::findOrFail($id_cliente);
        $cliente->nome = $request->input('nome');
        $cliente->telefone = $request->input('telefone');
        $cliente->email = $request->input('email');
        $cliente->cpf = $request->input('cpf');
        $cliente->endereco = $request->input('endereco');
        $cliente->fk_cidade = $request->input('fk_cidade');
        $cliente->save();

        return redirect()->back()->with('success', 'Cliente atualizado com sucesso.');
    }

    public function destroy($id_cliente)
    {
        $cliente = Cliente::findOrFail($id_cliente);
        $cliente->delete();

        return redirect()->back()->with('success', 'Cliente excluído com sucesso.');
    }
}
