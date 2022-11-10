<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pt2a - <?php echo $__env->yieldContent('title'); ?></title>
        <?php $__env->startSection('stylesheets'); ?>
	    <link rel="stylesheet" href="<?php echo e(asset('css/taula.css')); ?>" />
        <?php echo $__env->yieldSection(); ?>
    </head>
    <body>
        <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH /var/www/html/m7_2/pt2a/resources/views/layout.blade.php ENDPATH**/ ?>