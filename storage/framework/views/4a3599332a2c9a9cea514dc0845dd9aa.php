<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floricultura Jardim</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
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
        <h2>Funcionários</h2>
        <form action="<?php echo e(route('funcionarios.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-grupo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-grupo">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="form-grupo">
                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" required>
            </div>
            <div class="form-grupo">
                <label for="salario">Salário:</label>
                <input type="number" id="salario" name="salario" required>
            </div>
            <div class="form-grupo">
                <label for="contato">Contato:</label>
                <input type="text" id="contato" name="contato" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="$funcionario">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Cargo</th>
                    <th>Salário</th>
                    <th>Contato</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
        </table>
        <tbody>
        <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($funcionario->id_funcionario); ?></td>
            <td><?php echo e($funcionario->nome); ?></td>
            <td><?php echo e($funcionario->cpf); ?></td>
            <td><?php echo e($funcionario->cargo); ?></td>
            <td><?php echo e($funcionario->salario); ?></td>
            <td><a href="<?php echo e(route('funcionarios.update', ['id' => $funcionario->id_funcionario])); ?>">Editar</a></td>
            <td>
                <form action="<?php echo e(route('funcionarios.destroy', ['id' => $funcionario->id_funcionario])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </div>
</body>
</html>
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/funcionarios/index.blade.php ENDPATH**/ ?>