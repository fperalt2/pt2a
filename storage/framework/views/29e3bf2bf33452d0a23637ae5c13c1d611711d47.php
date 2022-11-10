<?php $__env->startSection('title', 'Llistat de llibres'); ?>

<?php $__env->startSection('stylesheets'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('stylesheets'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Llistat de llibres</h1>
    <a href="<?php echo e(route('llibre_list')); ?>">+ Nou llibre</a>

    <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>  
        </div><br />
    <?php endif; ?>

    <table style="margin-top: 20px;margin-bottom: 10px;">
        <thead>
            <tr>
                <th>Títol</th><th>Data de publicació</th><th>Vendes</th><th>Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $llibres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $llibre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($llibre->titol); ?></td><td><?php echo e($llibre->dataP); ?></td><td><?php echo e($llibre->vendes); ?></td><td><?php echo e($llibre->autor_id); ?></td>
                    <td>
                        <a href="<?php echo e(route('llibre_list')); ?>">Editar</a>
                        <a href="<?php echo e(route('llibre_list')); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/m7_2/pt2a/resources/views/llibre/index.blade.php ENDPATH**/ ?>