<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Bienvenido</title>
        <style type="text/css" media="screen">

            .ExternalClass * {line-height: 100%}

            /* Début style responsive (via media queries) */

            @media only screen and (max-width: 480px) {
                *[id=email-penrose-conteneur] {width: 100% !important;}
                table[class=resp-full-table] {width: 100%!important; clear: both;}
                td[class=resp-full-td] {width: 100%!important; clear: both;}
                img[class="email-penrose-img-header"] {width:100% !important; max-width: 340px !important;}
            }

            /* Fin style responsive */

        </style>

    </head>
    <body style="background-color:#ecf0f1">
        <div align="center" style="background-color:#ecf0f1;">

            <!-- Début en-tête -->

            <table id="email-penrose-conteneur" width="660" align="center" style="padding:20px 0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <table width="660" class="resp-full-table" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="50%" style="text-align:left;">
                                    <a href="{{ web_url() }}" style="text-decoration:none;"><h3 style="font-size: 25px;font-family: 'Helvetica Neue', helvetica, arial, sans-serif;font-weight: bold;color: #6B6B6B;margin: 0;"><?php /* echo "App Name"; */ echo ucwords(Config::get('app.website_title')) ?></h3></a>
                                </td>
                                <td width="50%" style="text-align:right;">
                                    <table align="right" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                        <h5 style="font-size: 20px;font-family: 'Helvetica Neue', helvetica, arial, sans-serif;font-weight: bold;color: #6B6B6B;margin: 0;"><?php echo date("d-m-Y"); ?></h5>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- Fin en-tête -->

<table id="email-penrose-conteneur" width="660" align="center" style="border-right:1px solid #e2e8ea; border-bottom:1px solid #e2e8ea; border-left:1px solid #e2e8ea; background-color:#ffffff;" border="0" cellspacing="0" cellpadding="0">

    <!-- Début bloc "mise en avant" -->

    <tr>
        <td style="background-color:#ff9d3d">
            <table width="660" class="resp-full-table" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="resp-full-td" valign="top" style="padding:20px; text-align:center;">
                        <span style="font-size:25px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100; color:#ffffff"><a href="{{ $mail_body['web_url'] }}" style="color:#ffffff; outline:none; text-decoration:none;">Bienvenido a <?php /* echo "App Name"; */ echo ucwords(Config::get('app.website_title')) ?>, {{ $mail_body['name'] }}</a> </span>
                    </td>
                </tr>
                <!-- <tr>
                        <td width="100%" class="resp-full-td" valign="top" style="padding: 0px 20px 20px 20px;">
                                <table align="center" border="0" cellspacing="0" cellpadding="0" style="margin:auto; padding:auto;">
                                        <tr>
                                                <td style="background-color:#ffffff; border-radius:3px; padding: 10px 40px;">
                                                        <a style="font-family:'Helvetica Neue', helvetica, arial, sans-serif; text-align: center; text-decoration: none; display:block; color:#ff9d3d; font-weight : 200; font-size: 25px;" href="#">J'en profite</a>
                                                </td>
                                        </tr>
                                </table>
                        </td>
                </tr> -->
            </table>
        </td>
    </tr>





    <!-- Début article 1 -->

    <tr>
        <td style="border-bottom: 1px solid #e2e8ea">
            <table width="660" class="resp-full-table" align="center" border="0" cellspacing="0" cellpadding="0" style="padding:20px;">
                <tr>
                    <td width="100%">

                        <table width="100%" align="right" class="resp-full-table" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="100%" class="resp-full-td" valign="top" style="text-align : justify;">
                                    <div style="padding: 10px;font-size:22px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100;color: #2ECC71;text-align:center;">¡Gracias por registrarte como usuario! Estamos muy contentos de que pertenezcas a esta comunidad que est&aacute; moviendo tu ciudad.
                                        </div>

                                        <div style="padding: 10px;font-size:12px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100; color:#545454;text-align:center;">Con Enfadelivery-Transport- tendr&aacute;s un d&iacute;a m&aacute;s productivo. S&oacute;lo conecta con el Enfadelivery-Transport-er m&aacute;s cercano y est&aacute;s ¡listo para eficientar tu tiempo!
                                        </div>

                                        <div style="padding: 10px;font-size:20px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100;background-color: #2ECC71;color:#fff;text-align:center;">¿C&oacute;mo solicitar un mandado en 3 pasos?
                                        </div>
                                        <br>
                                        <div style="padding: 10px;font-size:18px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100; color:#545454;">1. Detalla que haremos por ti 
                                        </div>
                                        <div style="padding: 0px 10px;font-size:12px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100;color:#545454;">S&oacute;lo llena el formulario dentro de la app en tu iPhone o android, detallando lo m&aacute;s posible tu encargo. Toca el bot&oacute;n “Solicitar” y espera a que el Enfadelivery-Transport-er m&aacute;s cercano acepte y comience tu servicio. 
                                        </div>

                                        <br>
                                        <div style="padding: 10px;font-size:18px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100; color:#545454;">2. Tu Enfadelivery-Transport-er comienza tu mandado
                                        </div>
                                        <div style="padding: 0px 10px;font-size:12px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100;color:#545454;">Podr&aacute;s comunicarte con él en cualquier momento, incluso tu Enfadelivery-Transport-er podr&aacute; llamarte o enviar un mensaje dentro de la plataforma para confirmar cualquier detalle. 
                                        </div>

                                        <br>
                                        <div style="padding: 10px;font-size:18px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100; color:#545454;">3. Confirma
                                        </div>
                                        <div style="padding: 0px 10px;font-size:12px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100;color:#545454;">Una vez que el servicio est&eacute; completo te llegar&aacute; una notificaci&oacute;n. Aseg&uacute;rate que todo est&eacute; en orden y da clic en aceptar para hacer el cargo del mandado a tu tarjeta registrada. Un email te llegar&aacute; con todos los detalles del servicio
                                    </div>
                                    <br><br>

                                    <div style="text-align:center"><a href="http://enfadelivery.com/usuarios/entrar" style="padding: 10px;font-size:18px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100;background-color: #ff9d3d;color:#fff;text-align:center;  text-decoration: none;">Entrar en mi Cuenta </a></div>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td width="100%" class="resp-full-td" valign="top" style="text-align : justify;">

                                    <div style="padding: 10px;font-size:12px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100; color:#545454;text-align:center;">
                                        Para cualquier duda o aclaraci&oacute;n {{ $mail_body['admin_eamil'] }}
                                    </div>
                                    <!--<div style="text-align:center"><a href="#" style="padding: 10px;font-size:18px; font-family:'Helvetica Neue', helvetica, arial, sans-serif; font-weight:100;background-color: #ff9d3d;color:#fff;text-align:center;  text-decoration: none;">Login</a></div>


                                    <br>-->
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Fin article 1 -->

</table>

<!-- Début footer -->


<!-- Fin footer -->

</div>
</body>
</html>