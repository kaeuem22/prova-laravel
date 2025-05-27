
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Editar Produto</h1>
    <form action="<?php echo e(route('genres.update', $genre->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">            
            <label for="nome">Nome</label>
            <input type="text" class="form-control"
            name="nome" value="<?php echo e($genre->nome); ?>">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kauem\Downloads\prova-laravel-main\resources\views/genres/edit.blade.php ENDPATH**/ ?>