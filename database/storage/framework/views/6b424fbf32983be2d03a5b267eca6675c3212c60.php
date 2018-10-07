<!DOCTYPE html>
<html dir="ltr" lang="en">
 <!-- HEAD -->
<head>
    <?php echo $__env->make('landing.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<!-- END HEAD -->
<body>

    <!-- HEADER -->
      <?php echo $__env->make('user.header2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- END HEADER -->
    <!-- NAV -->
    <!--  <?php echo $__env->make('landing.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
    <!-- END NAV -->
    <!-- MAIN-->

      <?php echo $__env->make('user.register2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- END MAIN -->
    <!-- FOOTER -->
      <?php echo $__env->make('landing.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- END FOOTER -->

</body>
</html>
