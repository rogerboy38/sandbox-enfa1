<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">


        <title>{{Config::get('app.website_title')}}</title>
        <?php
        $theme = Theme::all();
        $theme = DB::select('select * from themes');
        $logo = '/image/logo.png';
        $favicon = '/image/favicon.ico';
        foreach ($theme as $themes) {
            $logo = '/images/' . $themes->logo;
            $favicon = '/images/' . $themes->favicon;
        }
        if ($logo == '/uploads/') {
            $logo = './images/logo.png';
        }
        if ($favicon == '/uploads/') {
            $favicon = './image/favicon.ico';
        }
        ?>

        <link rel="icon" type="image/ico" href="<?php echo asset_url(); ?><?php echo $favicon; ?>">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url(); ?>/web/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo asset_url(); ?>/web/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url(); ?>/web/css/style.css" rel="stylesheet">
        <link href="<?php echo asset_url(); ?>/web/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo asset_url(); ?>/web/js/validation.js"></script>
    </head>

    <body>

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->

        <div id="login-page">
            <div class="container">
                <a href="<?php echo web_url(); ?>" class="col-md-2 col-xs-12"><img class="imghome" src="http://enfadelivery.com/images/logo.png" alt="" style="width: 55%; padding-top:20px;"></a>
                <!--<form class="form-login" action="{{URL::Route('userVerify')}}" method="post">-->
                <form class="form-login" action="{{'user/verify'}}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  @csrf
                    <h2 class="form-login-heading">Inicia Sesion en userLogin</h2>
                    <div class="login-wrap">
                        <span id="no_email_error1" style="display: none"> </span>
                        <input type="text" name="email" class="form-control" placeholder="Email"  id="email_check1" required="" >

<!--<input type="text" name="email" class="form-control" placeholder="Email Address" autofocus>-->
                        <br>
                        <input type="password" name="password" class="form-control"  placeholder="Contraseña">
                        <label class="checkbox">
                            <span class="pull-right">
                                <a data-toggle="modal" href="login.html#myModal"> ¿Olvidaste tu Contraseña?</a>

                            </span>
                        </label>

                        @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <b>{{ Session::get('error') }}</b>
                        </div>
                        @endif
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <b>{{ Session::get('success') }}</b>
                        </div>
                        @endif


                        <button class="btn btn-theme btn-block" type="submit" id="user-signin"><i class="fa fa-lock"></i>ENTRAR</button>
                        <hr>
                        <!--
                        <div class="login-social-link centered">
                        <p>or you can sign in via your social network</p>
                            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                        </div>
                        -->
                        <div class="registration">
                            ¿Aun no tienes cuenta con nosotros?<br/>
                            <a class="" href="{{route('/user/signup')}}">
                                Crear Cuenta
                            </a>
                        </div>

                    </div>
                </form>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">¿Olvidaste tu Contraseña ?</h4>
                            </div>
                            <form method="POST" action="{{route('/user/forgot-password')}}">
                                <div class="modal-body">
                                    <p>Captura tu email para enviarte tu contraseña.</p>
                                    <span id="no_email_error2" style="display: none"> </span>
                                    <!--<input type="text" name="email" placeholder="Email" autocomplete="off"  class="form-control placeholder-no-fix" required="" onblur="ValidateEmail(2)" id="email_check2" >-->
                                    <input type="text" name="email" placeholder="Email" autocomplete="off"  class="form-control placeholder-no-fix" required="" onblur="ValidateEmail(2)" id="email_check2" >


                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                                    <button class="btn btn-theme" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- modal -->



            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo asset_url(); ?>/web/js/jquery.js"></script>
        <script src="<?php echo asset_url(); ?>/web/js/bootstrap.min.js"></script>


        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="<?php echo asset_url(); ?>/web/js/jquery.backstretch.min.js"></script>
        <script>
                                        $.backstretch("<?php echo asset_url(); ?>/web/images/fondo-web.png", {speed: 500});
        </script>


        <script src="<?php echo asset_url(); ?>/web/js/bootstrap-tour.js"></script>
        <script type="text/javascript">
                                        var tour = new Tour(
                                                {
                                                    name: "userappLogin",
                                                });

                                        // Add your steps. Not too many, you don't really want to get your users sleepy
                                        tour.addSteps([
                                            {
                                                element: "#user-signin",
                                                title: "Sign in as a User",
                                                content: "Enter your login credentials and Click on signin button",
                                            },
                                        ]);

                                        // Initialize the tour
                                        tour.init();

                                        // Start the tour
                                        tour.start();
        </script>



    </body>
</html>
