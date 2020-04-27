<!DOCTYPE html>
<html dir="ltr" lang="es">
 <!-- HEAD -->

<head>
    @include('landing.head')
</head>
<!-- END HEAD -->
<body>

    <!-- HEADER -->
      @include('user.header2')
    <!-- END HEADER -->
    <!-- NAV -->
      @include('landing.nav')
    <!-- END NAV -->
    <!-- MAIN-->

      @include('administrators.loginAdmin2')
      <!--@css('filename')
      @js('filename')
      @jsIn('container-name', 'filename')-->

    <!-- END MAIN -->
    <!-- FOOTER -->
      @include('landing.footer')

    <!-- END FOOTER -->

</body>
</html>
