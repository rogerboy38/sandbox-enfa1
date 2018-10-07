<?php $__env->startSection('content'); ?>
<?php echo e(Form::open(array('url'=> '/quieroTransportar', 'method'=>'POST', 'class'=>"row m-0" ))); ?>

<?php echo $__env->make('user.login2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("web.layoutTransportar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>