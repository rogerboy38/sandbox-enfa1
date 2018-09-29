<!doctype html>
<html>
<head>
    @include('landing.head')
</head>
<body>
<div class="container">

    <header class="container">
        @include('landing.header')
    </header>


    <div id="main" class="row">
          
            @yield('content')

    </div>

    <footer class="container-fluid">
        @include('landing.footer')
    </footer>

</div>
</body>
</html>
