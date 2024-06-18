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
        <h2>Pedidos</h2>
        <form action="<?php echo e(route('pedidos.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-grupo">
                <label for="data_pedido">Data do Pedido:</label>
                <input type="date" id="data_pedido" name="data_pedido" required>
            </div>
            <div class="form-grupo">
                <label for="status_pedido">Status do Pedido:</label>
                <input type="text" id="status_pedido" name="status_pedido" required>
            </div>
            <div class="form-grupo">
                <label for="fk_cliente">Cliente:</label>
                <input type="text" id="fk_cliente" name="fk_cliente" required>
            </div>
            <div class="form-grupo">
                <label for="fk_funcionario">Funcionário:</label>
                <input type="text" id="fk_funcionario" name="fk_funcionario" required>
            </div>
            <div class="form-grupo">
                <label for="fk_itens">Lista de Itens:</label>
                <input type="text" id="fk_itens" name="fk_itens" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="$pedido">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data do Pedido</th>
                    <th>Status do Pedido</th>
                    <th>Cliente</th>
                    <th>Funcionário</th>
                    <th>Lista de Itens</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
        </table>
        <tbody>
        <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($pedido->id_pedido); ?></td>
            <td><?php echo e($pedido->nome); ?></td>
            <td><?php echo e($pedido->telefone); ?></td>
            <td><?php echo e($pedido->email); ?></td>
            <td><?php echo e($pedido->cpf); ?></td>
            <td><?php echo e($pedido->endereco); ?></td>
            <td><?php echo e($pedido->cidade); ?></td>
            <td><a href="<?php echo e(route('pedidos.update', ['id' => $pedido->id_pedido])); ?>">Editar</a></td>
            <td>
                <form action="<?php echo e(route('pedidos.destroy', ['id' => $pedido->id_pedido])); ?>" method="POST">
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
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/pedidos/index.blade.php ENDPATH**/ ?>