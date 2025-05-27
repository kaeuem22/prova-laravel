

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Criar Gênero</h1>
    <form action="<?php echo e(route('genres.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
                <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-6">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kauem\Downloads\prova-laravel-main\resources\views/genres/create.blade.php ENDPATH**/ ?>