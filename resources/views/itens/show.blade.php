<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedidos</title>
</head>
<body>
    <h1>Editar Pedidos</h1>
    <form action="{{ route('pedidos.update', ['id' => $pedido->id_pedido]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilize o método PUT para indicar que é uma atualização -->
        <div class="form-grupo">
            <label for="data_pedido">Data do Pedido:</label>
            <input type="date" id="data_pedido" name="data_pedido" value="{{ $pedido->data_pedido }}" required>
        </div>
        <div class="form-grupo">
            <label for="status_pedido">Status do Pedido:</label>
            <input type="text" id="status_pedido" name="status_pedido" value="{{ $pedido->status_pedido }}" required>
        </div>
        <div class="form-grupo">
            <label for="fk_cliente">Cliente:</label>
            <input type="text" id="fk_cliente" name="fk_cliente" value="{{ $pedido->fk_cliente }}" required>
        </div>
        <div class="form-grupo">
            <label for="fk_funcionario">Funcionário:</label>
            <input type="text" id="fk_funcionario" name="fk_funcionario" value="{{ $pedido->fk_funcionario }}" required>
        </div>
        <div class="form-grupo">
            <label for="fk_itens">Lista de Itens:</label>
            <input type="text" id="fk_itens" name="fk_itens" value="{{ $pedido->fk_itens }}" required>
        </div>
        <div class="form-grupo">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="{{ route('pedidos.index') }}">Voltar para a lista de pedidos</a>
</body>
</html>
