<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
</head>
<body>
    <h1>Editar Funcionário</h1>
    <form action="<?php echo e(route('funcionarios.update', ['id' => $funcionario->id_funcionario])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> <!-- Utilize o método PUT para indicar que é uma atualização -->
        <div class="form-grupo">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo e($funcionario->nome); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="<?php echo e($funcionario->cpf); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" value="<?php echo e($funcionario->cargo); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="salario">Salário:</label>
            <input type="number" id="salario" name="salario" value="<?php echo e($funcionario->salario); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="contato">Contato:</label>
            <input type="text" id="contato" name="contato" value="<?php echo e($funcionario->contato); ?>" required>
        </div>
        <div class="form-grupo">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="<?php echo e(route('funcionarios.index')); ?>">Voltar para a lista de funcionários</a>
</body>
</html>
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/funcionarios/show.blade.php ENDPATH**/ ?>