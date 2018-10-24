<!DOCTYPE html>
<html dir="ltr" lang="en">
 <!-- HEAD -->

@section('landing.marketplaceHead')
	Home
@endsection
<!-- END HEAD -->
<body>

    <!-- HEADER -->
      @include('landing.marketplaceHeader')
    <!-- END HEADER -->
    <!-- NAV -->
      @include('landing.marketplaceNav')
    <!-- END NAV -->
    <!-- MAIN-->
    <section class="col-md-9 dashboard__user" role="main">

      @include('landing.form.content')
      @include('web.listadoAvailables')


      </section>
    <!-- END MAIN -->
    <!-- FOOTER -->
      @include('landing.footer')

    <!-- END FOOTER -->
<script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
</body>
</html>
