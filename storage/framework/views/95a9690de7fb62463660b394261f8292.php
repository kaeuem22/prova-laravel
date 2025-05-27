<!--  -->
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="text-center">Livros</h1>
    <div class="text-right">
        <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary">Adicionar Livro</a>
    </div>
   
    <div>
<div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Titulo</th>
                <th>preco</th>
                <th>Data Pub.</th>
                <th>Gênero</th>
                <th>Autor</th>
            </tr>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->titulo); ?></td>
                <td><?php echo e($book->preco); ?></td>
                <td><?php echo e($book->data_pub); ?></td>
                <td><?php echo e($book->genre->nome); ?></td>
                <td><?php echo e($book->author->nome); ?></td>
                <td><a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esse livro?')">
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
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kauem\Downloads\prova-laravel-main\resources\views/books/index.blade.php ENDPATH**/ ?>