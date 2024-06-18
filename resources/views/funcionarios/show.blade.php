<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
</head>
<body>
    <h1>Editar Funcionário</h1>
    <form action="{{ route('funcionarios.update', ['id' => $funcionario->id_funcionario]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilize o método PUT para indicar que é uma atualização -->
        <div class="form-grupo">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $funcionario->nome }}" required>
        </div>
        <div class="form-grupo">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ $funcionario->cpf }}" required>
        </div>
        <div class="form-grupo">
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" value="{{ $funcionario->cargo }}" required>
        </div>
        <div class="form-grupo">
            <label for="salario">Salário:</label>
            <input type="number" id="salario" name="salario" value="{{ $funcionario->salario }}" required>
        </div>
        <div class="form-grupo">
            <label for="contato">Contato:</label>
            <input type="text" id="contato" name="contato" value="{{ $funcionario->contato }}" required>
        </div>
        <div class="form-grupo">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="{{ route('funcionarios.index') }}">Voltar para a lista de funcionários</a>
</body>
</html>
