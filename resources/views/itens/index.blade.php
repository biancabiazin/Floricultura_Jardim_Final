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
        <h2>Itens do Pedido</h2>
        <form action="{{ route('itens.store') }}" method="POST">
            @csrf
            <div class="form-grupo">
                <label for="qtd_itens">Quantidade de Itens:</label>
                <input type="number" id="qtd_itens" name="qtd_itens" required>
            </div>
            <div class="form-grupo">
                <label for="fk_planta">Planta:</label>
                <input type="text" id="fk_planta" name="fk_planta" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="$itens">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Qtd. Itens</th>
                    <th>$planta</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
        </table>
        <tbody>
        @foreach($itens as $item)
        <tr>
            <td>{{ $item->id_itens }}</td>
            <td>{{ $item->qtd_itens }}</td>
            <td>{{ $item->fk_planta }}</td>
            <td><a href="{{ route('itens.update', ['id' => $item->id_itens]) }}">Editar</a></td>
            <td>
                <form action="{{ route('itens.destroy', ['id' => $item->id_itens]) }}" method="POST">
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
