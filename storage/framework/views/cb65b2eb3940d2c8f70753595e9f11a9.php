<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Planta</title>
</head>
<body>
    <h1>Editar Planta</h1>
    <form action="<?php echo e(route('plantas.update', ['id' => $planta->id_planta])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> <!-- Utilize o método PUT para indicar que é uma atualização -->
        <div class="form-grupo">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo e($planta->nome); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="especie">Espécie:</label>
            <input type="text" id="especie" name="especie" value="<?php echo e($planta->especie); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" value="<?php echo e($planta->preco); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="qtd_estoque">Quantidade em Estoque:</label>
            <input type="number" id="qtd_estoque" name="qtd_estoque" value="<?php echo e($planta->qtd_estoque); ?>" required>
        </div>
        <div class="form-grupo">
            <label for="tamanho">Tamanho:</label>
            <input type="number" id="tamanho" name="tamanho" value="<?php echo e($planta->tamanho); ?>" required>
        </div>
        <div class="form-grupo">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <a href="<?php echo e(route('plantas.index')); ?>">Voltar para a lista de plantas</a>
</body>
</html>
<?php /**PATH C:\Users\198848\Documents\Floricultura_Jardim_Final\resources\views/plantas/show.blade.php ENDPATH**/ ?>