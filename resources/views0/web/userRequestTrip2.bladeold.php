@extends('web.layout')

@section('content')

<div class="col-md-12 mt">

    @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('type') }}">
        <b>{{ Session::get('message') }}</b>
    </div>

    @endif
    <div id='msg'></div>

        <div class="row">
            <h4>Solicita {{trans('customize.Trip')}}</h4><br>
            <div class="col-md-11">

                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="my_address" id="my-address" placeholder="Captura la direccion de origen" style="margin-bottom:10px;width:55%;float:left;" onblur="codeAddress(1);" >
                        <button id="saveFavoriteO" class="btn btn-success pull-right" onClick="SaveFav();" style="margin-left:5px;">Guardar</button>
                        <button id="getCords" class="btn btn-success pull-right" onClick="codeAddress(1);">Buscar Lugar</button>
                        <label style="width:100%; text-align:center;">Mis Favoritos</label>
                        <select id="favoritosO" style="width:80%;" onchange="getFavorite()">
                            {{$favoritos;}}
                        </select>
                        <button id="DeleteFavoriteO" class="btn btn-success pull-right" onClick="deleteFav();" style="margin-left:5px; margin-bottom:5px;">Eliminar</button>


                        <div id="map-canvas" style="width:100%;"></div>
                    </div>

                    <div class="col-md-6" id='destination' >
                        <input type="text" class="form-control" name="my_address" id="my-dest"  placeholder="Captura la direccion de destino" style="margin-bottom:10px;width:55%;float:left;" onblur="codeAddress(2);">
                        <button id="saveFavoriteD" class="btn btn-success pull-right" onClick="SaveFavD();" style="margin-left:5px;">Guardar</button>
                        <button id="getCords" class="btn btn-success pull-right" onClick="codeAddress(2);">Buscar Lugar</button>
                        <label style="width:100%; text-align:center;">Mis Favoritos</label>
                        <select id="favoritosD" style="width:80%;" onchange="getFavoriteD()">
                            {{$favoritos;}}
                        </select>
                        <button id="DeleteFavoriteD" class="btn btn-success pull-right" onClick="deleteFavD();" style="margin-left:5px; margin-bottom:5px;">Eliminar</button>



                        <div id="map-dest" style="width:100%;height:300px;"></div>
                    </div>

                </div>


                <form  id="request-form" style="display:none;">
                    <div class="form-group">
                        <br>
                        <div class="col-sm-12">
                            <label class="col-sm-12 col-sm-12 control-label">Describe tu mandado</label>
                        </div>
                        <br>
                        <textarea name="mandadoT" id="mandadoT"  placeholder="Escribe aqui tu mandado" style="margin-bottom:10px;width:100%;float:left;border-radius: 5px;overflow-y: scroll;height: 100px;resize: none; border-color: rgba(212, 212, 212, 1.0);"></textarea>
                        <!--<input type="text" class="form-control" name="mandado" id="mandado"  placeholder="Describe tu mandado" style="margin-bottom:10px;width:100%;float:left;">
                       -->
                        <div class="col-sm-12">
                            <label class="col-sm-12 col-sm-12 control-label">Tipo de Servicio</label>
                        </div>
                        <br>
                        <select name="type" class="form-control" id="flow4">
                            <!--<option value=''>--Select Type--</option>-->
                            <?php foreach ($types as $type) { ?>
                                <option value="<?= $type->id ?>" selected><?= $type->name ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <select id="provider" class="form-control" name='provider' style="display:none">

                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="col-sm-12 col-sm-12 control-label">Pago</label>
                        </div>
                        <br>
                        <select name="payment_type" class="form-control" required>
                            <!--<option value="1" <?php
                            if ($payment_option['cod'] == 0) {
                                echo 'hidden';
                            }
                            ?>>Pay by Cash</option>-->
                            <option value="0" <?php
                            if ($payment_option['stored_cards'] == 0) {
                                echo 'hidden';
                            }
                            ?>>Tarjeta</option>
                            <option value="2" <?php
                            if ($payment_option['paypal'] == 0) {
                                echo 'hidden';
                            }
                            ?>>Pay by Paypal</option>
                        </select>
                        <br>
                    </div>
                    <div class="form-group">
                        <?php
                        $promosett = Settings::where('key', 'promo_code')->first();
                        if ($promosett->value == 1) {
                            ?>
                            <input type="text" class="form-control" name="promo_code" id="promo_code" placeholder="Codigo de Promocion">
<?php } ?>
                    </div>
                    <input type="hidden" name="origen" id="origen">
                    <input type="hidden" name="destino" id="destino">
                    <input type="hidden" name="latitude" id="latitude">
                    <input type="hidden" name="longitude" id="longitude">
                    <input type="hidden" name="dest" id="destination_req" value='{{$destination}}'>
                    <input type="hidden" name="d_latitude" id="d_latitude">
                    <input type="hidden" name="d_longitude" id="d_longitude">
                    <input type="hidden" name="selection" id="selection" value='{{$selection}}'>
                    <input type="hidden" name="mandado" id="mandado">
                    <div id="tarjeta" style="display:none; color: red;">Por favor recuerda capturar tu tarjeta para poder realizar pedidos</div>
                    <?php if ($destination == 1) { ?>
                        <input type="button" class="btn btn-primary" value="Calcular Tarifa" href="{{ route('userrequestFare') }}" id="fare">
<?php } ?>
                    <input type="submit" class="btn btn-primary" value="Solicitar Transporte" id="flow5">
                    <br>

                    </div>
                </form>
                <div class="form-group">
                    <div class="col-sm-12" id="farediv" >
                        <label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estimar tarifa de {{trans('customize.Trip')}}:</label><label id="faretoatal"></label>
                    </div></div>
            </div>
        </div>
    </div>




</div>

<script type="text/javascript">

// provider manual automatic toggle script

    $(document).ready(function () {
        var latitude = $("#latitude").val();
        var longitude = $("#longitude").val();
        var selection = $('#selection').val();
        var destination = $('#destination_req').val();

        if (destination == 1) {
            $('#destination').show();
        }

        $("#flow4").change(function () {
            initialize_map($("#latitude").val(), $("#longitude").val());
        });
        $("#flow4").change(function () {
            if (selection == '2') {

                var type = $(this).val();

                var dataString = 'longitude=' + $("#longitude").val() + '&latitude=' + $("#latitude").val() + '&type=' + type;
                console.log(dataString)
                $.ajax({
                    type: "POST",
                    url: "<?php echo URL::Route('nearby') ?>",
                    data: dataString,
                    success: function (res) {
                        $('#provider').empty();
                        $('#provider').fadeIn(300);
                        $('#provider').append("<option value=''>--Select Provider--</option>");
                        $('#provider').append(res);
                    }
                });
            }
            return false;
        });

        $('#request-form').submit(function () {
            if (selection == '2') {
                var provider_value = $('#provider').val();
                var type_value = $('#flow4').val();
                if (type_value == '' || provider_value == '') {
                    $('#msg').empty();
                    var msg = '<div class="alert alert-danger"><b>Please select a Type and provider</b></div';
                    $('#msg').append(msg);
                    return false;
                } else {
                    $('#request-form').attr('action', "<?php echo route('manualrequest') ?>");
                    $('#request-form').attr('method', "post");
                    return true;
                }
            }
            var card= <?php
            try{
                $owner_id=Session::get('user_id');
                $payments = Payment::where('owner_id', $owner_id)->get();
                $json=json_encode($payments,true);
                $jdecode=json_decode($json,true);
                echo $jdecode[0]['last_four'];
            }
            catch(Exception $e )
            {
                echo '0';
            }
                //$last4=$payments['last_four'];
                //echo $last4;

                ?>;
            if ($('#selection').val() == 1 || $('#selection').val() == '')
            {


               if(card!=0)
               {
                //alert("entro aqui");
                //var mandado=$.trim($("textarea").val();
                var text1 = document.getElementById('mandadoT').value;
                document.getElementById("mandado").value =text1;
                document.getElementById('tarjeta').style.display='none';
                $('#request-form').attr('action', "<?php echo route('userrequesttrips') ?>");
                $('#request-form').attr('method', "post");
                return true;
               }
                else{
                //alert("entro else");
                //var mandado=$.trim($("textarea").val();
                var text1 = document.getElementById('mandadoT').value;
                document.getElementById("mandado").value =text1;
                document.getElementById('tarjeta').style.display='';
                return false;
                 }
            }


        });


    });

    $("#farediv").hide();

    $('#fare').click(function () {
        $("#farediv").show();
        //$("#fare").attr("href");
        var url = $("#fare").attr("href");
        var formdata = $("#request-form").serialize();
       // alert(url);
        console.log(formdata)
        $.ajax(url, {
            data: formdata,
            type: "GET",
            success: function (response) {
                if (response.success)
                {
                    $("#faretoatal").html(response.total)
                }
                else
                {
                    $("#test1").html("something went wrong");
                }
            }
        });

    });

</script>

<script type="text/javascript">
    function SaveFav(){
        var textOrigen=document.getElementById("my-address");
        if((textOrigen.value)!='')
        {
            var alias = prompt("Captura un nombre para tu favorito", "");

            if (alias != null) {

                var owner = <?php $owner_id=Session::get('user_id'); echo $owner_id ?>;

                // AJAX code to execute query and get back to same page with table content without reloading the page.
                $.ajax({
                    type: "POST",
                    url: "http://localhost/courier/public/doFavoritos2.php",
                    data: {idOwner:owner, address: textOrigen.value,alias:alias,latitude:latitude,longitude:longitude},
                    cache: false,
                    success: function(data) {

                        alert(data);
                    }
                });

            }
        }
        else
        {
            alert('Por favor captura una direccion de origen');
        }

    }
    function SaveFavD(){
        var textOrigen=document.getElementById("my-dest");
        if((textOrigen.value)!='')
        {
            var alias = prompt("Captura un nombre para tu favorito", "");

            if (alias != null) {

                var owner = <?php $owner_id=Session::get('user_id'); echo $owner_id ?>;

                // AJAX code to execute query and get back to same page with table content without reloading the page.
                $.ajax({
                    type: "POST",
                    url: "http://localhost/courier/public/doFavoritos2.php",
                    data: {idOwner:owner, address: textOrigen.value,alias:alias, latitude:latitude, longitude:longitude},
                    cache: false,
                    success: function(data) {

                        alert(data);
                    }
                });

            }
        }
        else
        {
            alert('Por favor captura una direccion de origen');
        }

    }

    // destination map script
    function deleteFav()
    {
        if(document.getElementById('favoritosO').value != "0") {

    var r = confirm("¿Seguro deseas borrar este Favorito?");
    if (r == true) {
        var owner = <?php $owner_id=Session::get('user_id'); echo $owner_id ?>;
        var borrar=0;
        var address=document.getElementById("favoritosO");
        if (address.selectedIndex == -1){
            address="";
        }

        address= address.options[address.selectedIndex].text;

        // AJAX code to execute query and get back to same page with table content without reloading the page.
        $.ajax({
            type: "POST",
            url: "http://localhost/courier/public/doFavoritos.php",
            data: {idOwner:owner, address: address,borrar:borrar, latitude:latitude,longitude:longitude},
            cache: false,
            success: function(data) {
// alert(dataString);
                alert(data);
            }
        });
    } else {

    }
    }


    }
    function deleteFavD()
    {
        if(document.getElementById('favoritosD').value != "0") {

    var r = confirm("¿Seguro deseas borrar este Favorito?");
    if (r == true) {
        var owner = <?php $owner_id=Session::get('user_id'); echo $owner_id ?>;
        var borrar=0;
        var address=document.getElementById("favoritosD");
        if (address.selectedIndex == -1){
            address="";
        }

        address= address.options[address.selectedIndex].text;

        // AJAX code to execute query and get back to same page with table content without reloading the page.
        $.ajax({
            type: "POST",
            url: "http://localhost/courier/public/doFavoritos.php",
            data: {idOwner:owner, address: address,borrar:borrar, latitude:latitude,longitude:longitude},
            cache: false,
            success: function(data) {
// alert(dataString);
                alert(data);
            }
        });
    } else {

    }
    }


    }
    function getFavoriteD()
    {
        if(document.getElementById('favoritosD').value != "1") {
     //Do something
        document.getElementById("my-dest").value =document.getElementById('favoritosD').value;
            codeAddress(2);
        }
    }

    function getFavorite(){
        if(document.getElementById('favoritosO').value != "1") {
     //Do something
        document.getElementById("my-address").value =document.getElementById('favoritosO').value;
            codeAddress(1);
        }



    }

    function init_map(lati, lngi) {
        var mapOptions = {
            center: {lat: lati, lng: lngi},
            zoom: 16,
            scrollwheel: false,
        };
        var map = new google.maps.Map(document.getElementById('map-dest'),
                mapOptions);
        var myLatlng = new google.maps.LatLng(lati, lngi);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'You!',
            animation: google.maps.Animation.DROP,
            draggable: true,
        });

        var infowindow = new google.maps.InfoWindow({
            content: "Escoge tu destino"
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
            if (marker.getAnimation() != null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        });
        infowindow.open(map, marker);



        google.maps.event.addListener(marker, 'dragend', function () {
            // updating the marker position
            var latLng2 = marker.getPosition();
            var geocoder = new google.maps.Geocoder();
            document.getElementById("d_latitude").value = latLng2.lat();
            document.getElementById("d_longitude").value = latLng2.lng();

            var latlngplace = new google.maps.LatLng(latLng2.lat(), latLng2.lng());
            geocoder.geocode({'latLng': latlngplace}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        document.getElementById("my-dest").value = results[0].formatted_address;
                         document.getElementById("x").value = results[0].formatted_address;
                    } else {
                        alert('No se encontro la direccion');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });

        });


    }
    google.maps.event.addDomListener(window, 'load', init_map);

</script>

<script>
    // source map script
    var gmarkers = [];

    function (lat, lng) {
        $("#request-form").show();
        latitude = parseFloat(lat);
        longitude = parseFloat(lng);
        var marker_icon = '<?php echo asset_url() . "/web/images/pin_driver-1.png"; ?>';

        var myLatlng = new google.maps.LatLng(latitude, longitude);
        var mapOptions = {
            zoom: 16,
            center: myLatlng,
            scrollwheel: false,
        }

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


        var marker_you = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'You!',
            draggable: true,
        });


        var latitude = $("#latitude").val();
        var longitude = $("#longitude").val();
        var data = 'longitude=' + lng + '&latitude=' + lat + '&type=' + $("#flow4").val();

        $.ajax({
            type: "GET",
            url: "<?php echo URL::Route('/find') ?>",
            data: data,
            success: function (response) {


                if (response.success) {
                    for (i = 0; i < response.inc; i++) {
                        var marker_ll = new google.maps.LatLng(response.walker[i][2], response.walker[i][3]);
                        var result = new google.maps.Marker({
                            position: marker_ll,
                            map: map,
                            icon: marker_icon,
                            title: response.walker[i][1],
                        });
                        gmarkers.push(result);
                    }
                }
            }
        });


        google.maps.event.addListener(marker_you, 'dragend', function () {
            // updating the marker position
            var latLng = marker_you.getPosition();
            var geocoder = new google.maps.Geocoder();
            document.getElementById("latitude").value = latLng.lat();
            document.getElementById("longitude").value = latLng.lng();


            $("#flow4").trigger("change");

            for (var i = 0; i < gmarkers.length; i++) {
                gmarkers[i].setMap(null);
            }

            var latitude = latLng.lat();
            var longitude = latLng.lng();
            gmarkers = [];

            var data = 'longitude=' + longitude + '&latitude=' + latitude + '&type=' + $("#flow4").val();

            $.ajax({
                type: "GET",
                url: "<?php echo URL::Route('/find') ?>",
                data: data,
                success: function (response) {

                    if (response.success) {

                        for (i = 0; i < response.inc; i++) {
                            var marker_ll = new google.maps.LatLng(response.walker[i][2], response.walker[i][3]);
                            var result = new google.maps.Marker({
                                position: marker_ll,
                                map: map,
                                icon: marker_icon,
                                title: response.walker[i][1],
                            });
                            gmarkers.push(result);

                        }
                    }
                }
            });

            var latlngplace = new google.maps.LatLng(latLng.lat(), latLng.lng());
            geocoder.geocode({'latLng': latlngplace}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        document.getElementById("my-address").value = results[0].formatted_address;
                        document.getElementById("origen").value = results[0].formatted_address;
                    } else {
                        alert('No se encontro la direccion');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });

        });

    }

</script>


<!--script for this page-->
<script type="text/javascript">
    var tour = new Tour(
            {
                name: "userapprequest",
            });

    // Add your steps. Not too many, you don't really want to get your users sleepy
    tour.addSteps([
        {
            element: "#flow2",
            title: "Choosing address",
            content: "Please Enter your address and click on find location",
        },
        {
            element: "#flow3",
            title: "Adjust location",
            content: "You can move the marker to adjust your pick up location"
        },
        {
            element: "#flow4",
            title: "Choosing Type of service",
            content: "You can select the type of service in the drop down"
        },
        {
            element: "#flow5",
            title: "Requesting a  request",
            content: "Now click on request {{trans('customize.Trip')}} to request your first {{trans('customize.Trip')}}",
        },
    ]);

    // Initialize the tour
    tour.init();

    // Start the tour
    tour.start();
</script>



@stop
