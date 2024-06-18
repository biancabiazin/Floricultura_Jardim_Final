<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cidades</title>
</head>
<body>
    <h1>Editar cidades</h1>
    <form action="{{ route('cidades.update', ['id' => $cidade->id_cidade]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilize o método PUT para indicar que é uma atualização -->
        <div class="form-grupo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="{{ $cidade->nome }} required>
            </div>
            <div class="form-grupo">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="{{ $cidade->estado }} required>
            </div>
            <div class="form-grupo">
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais" value="{{ $cidade->pais }} required>
            </div>
        <div class="form-grupo">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="{{ route('cidades.index') }}">Voltar para a lista de cidades</a>
</body>
</html>
