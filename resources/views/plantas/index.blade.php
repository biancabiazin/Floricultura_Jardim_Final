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
        <h2>Plantas</h2>
        <form action="{{ route('plantas.store') }}" method="POST">
            @csrf
            <div class="form-grupo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-grupo">
                <label for="especie">Espécie:</label>
                <input type="text" id="especie" name="especie" required>
            </div>
            <div class="form-grupo">
                <label for="preco">Preço:</label>
                <input type="number" id="preco" name="preco" required>
            </div>
            <div class="form-grupo">
                <label for="qtd_estoque">Quantidade em Estoque:</label>
                <input type="number" id="qtd_estoque" name="qtd_estoque" required>
            </div>
            <div class="form-grupo">
                <label for="tamanho">Tamanho:</label>
                <input type="number" id="tamanho" name="tamanho" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="planta">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Preço</th>
            <th>Quantidade em Estoque</th>
            <th>Tamanho</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach($plantas as $planta)
        <tr>
            <td>{{ $planta->id_planta }}</td>
            <td>{{ $planta->nome }}</td>
            <td>{{ $planta->especie }}</td>
            <td>{{ $planta->preco }}</td>
            <td>{{ $planta->qtd_estoque }}</td>
            <td>{{ $planta->tamanho }}</td>
            <td><a href="{{ route('plantas.update', ['id' => $planta->id_planta]) }}">Editar</a></td>
            <td>
                <form action="{{ route('plantas.destroy', ['id' => $planta->id_planta]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    </div>
</body>
</html>
