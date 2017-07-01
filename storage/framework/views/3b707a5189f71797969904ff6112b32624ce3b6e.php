

<?php $__env->startSection('page'); ?>

    
    <?php echo $__env->yieldContent('content'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <?php echo e(Html::style('/danny/public/assets/auth/css/auth.c6436b6b48978bc2a589b2ed5dfcb0dd.css')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>