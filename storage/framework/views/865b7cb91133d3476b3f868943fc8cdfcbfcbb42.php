<?php $__env->startSection('title', 'Llistat d\'autors'); ?>

<?php $__env->startSection('stylesheets'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('stylesheets'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Llistat d'autors</h1>
    <a href="<?php echo e(route('autor_new')); ?>">+ Nou autor</a>

    <?php if(session('status')): ?>
        <div>
            <strong>Success!</strong> <?php echo e(session('status')); ?>  
        </div>
    <?php endif; ?>

    <table style="margin-top: 20px;margin-bottom: 10px;">
        <thead>
            <tr>
                <th>Nom</th><th>Cognoms</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $autors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($autor->nom); ?></td><td><?php echo e($autor->cognoms); ?></td>
                    <td>
                        <a href="<?php echo e(route('autor_edit', ['id' => $autor->id])); ?>">Editar</a>
                        <a href="<?php echo e(route('autor_delete', ['id' => $autor->id])); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/m7_2/pt2a/resources/views/autor/list.blade.php ENDPATH**/ ?>