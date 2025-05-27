<!--  -->
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="text-center">Autor</h1>
    <div class="text-right">
        <a href="<?php echo e(route('authors.create')); ?>" class="btn btn-primary">Adicionar Autor</a>
    </div>
   
    <div>
<div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nasc.</th>
                <th>Pais</th>
                <th>Estado</th>
            </tr>
            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($author->nome); ?></td>
                <td><?php echo e($author->cpf); ?></td>
                <td><?php echo e($author->data_nasc); ?></td>
                <td><?php echo e($author->pais); ?></td>
                <td><?php echo e($author->estado); ?></td>
                <td><a href="<?php echo e(route('authors.edit', $author->id)); ?>" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="<?php echo e(route('authors.destroy', $author->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esse autor?')">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kauem\Downloads\prova-laravel-main\resources\views/authors/index.blade.php ENDPATH**/ ?>