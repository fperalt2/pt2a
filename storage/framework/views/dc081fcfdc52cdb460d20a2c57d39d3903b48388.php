<?php $__env->startSection('title', 'Nou Llibre'); ?>

<?php $__env->startSection('stylesheets'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('stylesheets'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Nou Llibre</h1>
    <a href="<?php echo e(route('llibre_list')); ?>">&laquo; Torna</a>
	<div style="margin-top: 20px">
        <form method="POST" action="<?php echo e(route('llibre_new')); ?>">
            <?php echo csrf_field(); ?>
            <div>
                <label for="titol">Títol</label>
                <input type="text" name="titol" />
            </div>
            <div>            
                <label for="dataP">Data de publicació</label>
                <input type="date" name="dataP" />
            </div>
            <div>                            
                <label for="vendes">Vendes</label>
                <input type="number" name="vendes" />
            </div>
            <div>
                <label for="autor_id">Autor</label>
                <select name="autor_id">
                    <?php $__currentLoopData = $autors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($autor->id); ?>"><?php echo e($autor->nom); ?> <?php echo e($autor->cognoms); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit">Crear Llibre</button>
        </form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/m7_2/pt2a/resources/views/llibre/create.blade.php ENDPATH**/ ?>