<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('stylesheets'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('stylesheets'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>
      <img src="<?php echo e(asset ('img/logo.png')); ?>" alt="">
      <h2>UF2-Pt2a</h2>
      <hr>
      <h3>Pràctica per iniciar-se en els conceptes bàsics de Laravel</h3>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/m7_2/pt2a/resources/views/default/home.blade.php ENDPATH**/ ?>