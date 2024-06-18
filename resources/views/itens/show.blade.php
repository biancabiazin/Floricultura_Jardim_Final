<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar itens</title>
</head>
<body>
    <h1>Editar itens</h1>
    <form action="{{ route('itens.update', ['id' => $item->id_itens]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilize o método PUT para indicar que é uma atualização -->
        <div class="form-grupo">
            <label for="qtd_itens">Quantidade de Itens:</label>
            <input type="number" id="qtd_itens" name="qtd_itens" value="{{ $item->qtd_itens }}" required>
        </div>
        <div class="form-grupo">
            <label for="fk_planta">Planta:</label>
            <input type="text" id="fk_planta" name="fk_planta" value="{{ $item->fk_planta }}" required>
        </div>
        <div class="form-grupo">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="{{ route('itens.index') }}">Voltar para a lista de itens</a>
</body>
</html>
