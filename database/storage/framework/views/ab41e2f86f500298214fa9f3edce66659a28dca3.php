<?php $__env->startSection('content'); ?>
<?php echo e(Form::open(array('url'=> '/create', 'method'=>'POST', 'class'=>"row m-0" ))); ?>

<?php echo $__env->make('landing.login2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("web.layoutlogin", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>