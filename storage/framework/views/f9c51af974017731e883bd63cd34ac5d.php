<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar pedidos</title>
</head>
<body>
    <h1>Editar pedidos</h1>
    <form action="<?php echo e(route('pedidos.update', ['id' => $pedido->id_pedido])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> <!-- Utilize o método PUT para indicar que é uma atualização -->
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
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="<?php echo e(route('pedidos.index')); ?>">Voltar para a lista de pedidos</a>
</body>
</html>
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/pedidos/show.blade.php ENDPATH**/ ?>