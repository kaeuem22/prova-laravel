<!--  -->
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="text-center">Gênero</h1>
    <div class="text-right">
        <a href="<?php echo e(route('genres.create')); ?>" class="btn btn-primary">Adicionar Gênero</a>
    </div>
   
    <div>
<div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
            </tr>
            <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($genre->nome); ?></td>
                <td><a href="<?php echo e(route('genres.edit', $genre->id)); ?>" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="<?php echo e(route('genres.destroy', $genre->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esse genero?')">
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
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kauem\Downloads\prova-laravel-main\resources\views/genres/index.blade.php ENDPATH**/ ?>