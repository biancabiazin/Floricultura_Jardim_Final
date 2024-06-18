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
        <h2>Cidades</h2>
        <form action="<?php echo e(route('cidades.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-grupo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-grupo">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>
            </div>
            <div class="form-grupo">
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="$cidade">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>País</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
        </table>
        <tbody>
        <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cidade->id_cidade); ?></td>
            <td><?php echo e($cidade->nome); ?></td>
            <td><?php echo e($cidade->telefone); ?></td>
            <td><?php echo e($cidade->email); ?></td>
            <td><?php echo e($cidade->cpf); ?></td>
            <td><?php echo e($cidade->endereco); ?></td>
            <td><?php echo e($cidade->cidade); ?></td>
            <td><a href="<?php echo e(route('cidades.update', ['id' => $cidade->id_cidade])); ?>">Editar</a></td>
            <td>
                <form action="<?php echo e(route('cidades.destroy', ['id' => $cidade->id_cidade])); ?>" method="POST">
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
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/cidades/index.blade.php ENDPATH**/ ?>