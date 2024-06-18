<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floricultura Jardim</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Floricultura Jardim</h1>
        <nav>
        <a href="/">Home</a>
            <a href="/plantas">Planta</a>
            <a href="/funcionarios">Funcionários</a>
            <a href="/cidades">Cidades</a>
            <a href="/clientes">Clientes</a>
            <a href="/itens">Itens</a>
            <a href="/pedidos">Pedidos</a>
        </nav>
    </header>
    <div class="container">
        <h2>Pedidos</h2>
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
            <div class="form-grupo">
                <label for="data_pedido">Data do Pedido:</label>
                <input type="date" id="data_pedido" name="data_pedido" required>
            </div>
            <div class="form-grupo">
                <label for="status_pedido">Status do Pedido:</label>
                <input type="text" id="status_pedido" name="status_pedido" required>
            </div>
            <div class="form-grupo">
                <label for="fk_cliente">Cliente:</label>
                <input type="text" id="fk_cliente" name="fk_cliente" required>
            </div>
            <div class="form-grupo">
                <label for="fk_funcionario">Funcionário:</label>
                <input type="text" id="fk_funcionario" name="fk_funcionario" required>
            </div>
            <div class="form-grupo">
                <label for="fk_itens">Lista de Itens:</label>
                <input type="text" id="fk_itens" name="fk_itens" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="$pedido">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data do Pedido</th>
                    <th>Status do Pedido</th>
                    <th>Cliente</th>
                    <th>Funcionário</th>
                    <th>Lista de Itens</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
        </table>
        <tbody>
        @foreach($pedidos as $pedido)
        <tr>
            <td>{{ $pedido->id_pedido }}</td>
            <td>{{ $pedido->nome }}</td>
            <td>{{ $pedido->telefone }}</td>
            <td>{{ $pedido->email }}</td>
            <td>{{ $pedido->cpf }}</td>
            <td>{{ $pedido->endereco }}</td>
            <td>{{ $pedido->cidade }}</td>
            <td><a href="{{ route('pedidos.update', ['id' => $pedido->id_pedido]) }}">Editar</a></td>
            <td>
                <form action="{{ route('pedidos.destroy', ['id' => $pedido->id_pedido]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </div>
</body>
</html>
