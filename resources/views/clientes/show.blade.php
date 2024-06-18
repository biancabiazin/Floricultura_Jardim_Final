<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Clientes</title>
</head>
<body>
    <h1>Editar Clientes</h1>
    <form action="{{ route('clientes.update', ['id' => $cliente->id_cliente]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilize o método PUT para indicar que é uma atualização -->
        <div class="form-grupo">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $cliente->nome }}" required>
        </div>
        <div class="form-grupo">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" value="{{ $cliente->telefone }}" required>
        </div>
        <div class="form-grupo">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="{{ $cliente->email }}" required>
        </div>
        <div class="form-grupo">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ $cliente->cpf }}" required>
        </div>
        <div class="form-grupo">
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="{{ $cliente->endereco }}" required>
        </div>
        <div class="form-grupo">
            <label for="fk_cidade">Cidade:</label>
            <input type="text" id="fk_cidade" name="fk_cidade" value="{{ $cliente->fk_cidade }}" required>
        </div>
        <div class="form-grupo">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="{{ route('clientes.index') }}">Voltar para a lista de clientes</a>
</body>
</html>
