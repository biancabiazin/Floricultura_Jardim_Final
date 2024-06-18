<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Clientes</title>
</head>
<body>
    <h1>Editar Clientes</h1>
    <form action="<?php echo e(route('clientes.update', ['id' => $cliente->id_cliente])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> <!-- Utilize o método PUT para indicar que é uma atualização -->
        <div class="form-grupo">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo e($cliente->nome); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" value="<?php echo e($cliente->telefone); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo e($cliente->email); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="<?php echo e($cliente->cpf); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="<?php echo e($cliente->endereco); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="fk_cidade">Cidade:</label>
            <input type="text" id="fk_cidade" name="fk_cidade" value="<?php echo e($cliente->fk_cidade); ?>" required>
        </div>
        <div class="form-grupo">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="<?php echo e(route('clientes.index')); ?>">Voltar para a lista de clientes</a>
</body>
</html>
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/clientes/show.blade.php ENDPATH**/ ?>