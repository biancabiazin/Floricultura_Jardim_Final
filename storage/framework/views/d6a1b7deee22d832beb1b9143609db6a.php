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
        <h2>Itens do Pedido</h2>
        <form action="<?php echo e(route('itens.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-grupo">
                <label for="qtd_itens">Quantidade de Itens:</label>
                <input type="number" id="qtd_itens" name="qtd_itens" required>
            </div>
            <div class="form-grupo">
                <label for="fk_planta">ID da Planta:</label>
                <input type="number" id="fk_planta" name="fk_planta" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        
        <!-- Tabela para exibir os itens já inseridos -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Qtd. Itens</th>
                    <th>ID da Planta</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id_itens); ?></td>
                    <td><?php echo e($item->qtd_itens); ?></td>
                    <td><?php echo e($item->fk_planta); ?></td>
                    <td><a href="<?php echo e(route('itens.show', ['id' => $item->id_itens])); ?>">Editar</a></td>
                    <td>
                        <form action="<?php echo e(route('itens.destroy', ['id' => $item->id_itens])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/itens/index.blade.php ENDPATH**/ ?>