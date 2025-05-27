
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Editar Produto</h1>
    <form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col-6">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" value="<?php echo e($book->titulo); ?>">
                <?php $__errorArgs = ['titulo'];
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
        <div class="row">
            <div class="col-6">
                <label for="resumo">Resumo</label>
                <input type="text" class="form-control" name="resumo" value="<?php echo e($book->resumo); ?>">
                <?php $__errorArgs = ['resumo'];
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
                <div class="row">
            <div class="col-6">
                <label for="data_pub">Data de Publicação</label>
                <input type="date" class="form-control" name="data_pub" value="<?php echo e($book->data_pub); ?>">
                <?php $__errorArgs = ['data_pub'];
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
        <div class="row">
        <div class="col-6">
                <label for="preco">Preço</label>
                <input type="number" step="0.01" class="form-control" name="preco" value="<?php echo e($book->preco); ?>">
                <?php $__errorArgs = ['preco'];
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
        <div class="form-group">
        <label for="genre_id">Gênre</label>
            <select class="form-control" name="genre_id">
                <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($genre->id); ?>" 
                        <?php echo e($genre->id == $book->genre_id ? 'selected' : ''); ?>>
                        <?php echo e($genre->nome); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
        <label for="author_id">Autor</label>
            <select class="form-control" name="author_id">
                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($author->id); ?>" 
                        <?php echo e($author->id == $book->author_id ? 'selected' : ''); ?>>
                        <?php echo e($author->nome); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kauem\Downloads\prova-laravel-main\resources\views/books/edit.blade.php ENDPATH**/ ?>