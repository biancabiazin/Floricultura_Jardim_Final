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
        <h2>Clientes</h2>
        <form action="<?php echo e(route('clientes.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-grupo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-grupo">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="form-grupo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-grupo">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="form-grupo">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-grupo">
                <label for="fk_cidade">Cidade:</label>
                <input type="text" id="fk_cidade" name="fk_cidade" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="$cliente">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cliente->id_cliente); ?></td>
            <td><?php echo e($cliente->nome); ?></td>
            <td><?php echo e($cliente->telefone); ?></td>
            <td><?php echo e($cliente->email); ?></td>
            <td><?php echo e($cliente->cpf); ?></td>
            <td><?php echo e($cliente->endereco); ?></td>
            <td><?php echo e($cliente->cidade); ?></td>
            <td><a href="<?php echo e(route('clientes.update', ['id' => $cliente->id_cliente])); ?>">Editar</a></td>
            <td>
                <form action="<?php echo e(route('clientes.destroy', ['id' => $cliente->id_cliente])); ?>" method="POST">
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
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/clientes/index.blade.php ENDPATH**/ ?>