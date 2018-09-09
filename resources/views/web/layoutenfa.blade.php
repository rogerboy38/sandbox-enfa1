<!DOCTYPE html>
<html dir="ltr" lang="en">
 <!-- HEAD -->
<head>
    @include('landing.head')
</head>
<!-- END HEAD -->
<body>

    <!-- HEADER -->
      @include('landing.header')
    <!-- END HEADER -->
    <!-- NAV -->
      @include('landing.nav')
    <!-- END NAV -->
    <!-- MAIN-->

      @include('landing.main')

    <!-- END MAIN -->
    <!-- FOOTER -->
      @include('landing.footer')

    <!-- END FOOTER -->
    <script src="https://unpkg.com/ionicons@4.4.2/dist/ionicons.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
