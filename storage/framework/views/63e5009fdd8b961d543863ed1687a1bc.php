<!--  -->
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="text-center">Funcionario</h1>
    <div class="text-right">
        <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary">Adicionar Funcionario</a>
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
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employee->nome); ?></td>
                <td><?php echo e($employee->cpf); ?></td>
                <td><?php echo e($employee->email); ?></td>
                <td><?php echo e($employee->data_nasc); ?></td>
                <td><?php echo e($employee->estado); ?></td>
                <td><a href="<?php echo e(route('employees.edit', $employee->id)); ?>" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="<?php echo e(route('employees.destroy', $employee->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esse funcionário?')">
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
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kauem\Downloads\prova-laravel-main\resources\views/employees/index.blade.php ENDPATH**/ ?>