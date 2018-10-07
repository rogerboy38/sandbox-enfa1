<main class="home">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link id="bsdp-css" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


  <section class="welcome-bg">
    <img class="welcome-bg -img img-fluid"src="./src/images/bg-2.jpg" alt="">
    <div class="row align-items-center">
      <div class="col title">
        <p>Envía o transporta tu carga</p>
        <h1>Encuentra o envia tu <span style="color:#FFA000">carga</span> con nosotros.</h1>
        <p>
          Somos el primer Marketplace Mexicano
        </p>

        <p>
          especializado en transporte de carga para empresas.
        </p>
      </div>
    </div>
    @include('landing.form.content')
  </section>
  <section class="container enfa-content">
    <h2 class="text-center">Envía tu carga en 3 pasos 😉</h2>
    <div class="row enfa-content enfa-steps text-center text-uppercase">
      <div class="col-xs-12 col-md-4 enfa-step -one">
        <img src="http://via.placeholder.com/300x350" alt="">
        <p>1.Busca y encuentra</p>
      </div>
      <div class="col-xs-12 col-md-4 enfa-step -two">
        <img src="http://via.placeholder.com/300x350" alt="">
        <p>2. Espera tu cotización inteligente</p>
      </div>
      <div class="col-xs-12 col-md-4 enfa-step -three">
        <img src="http://via.placeholder.com/300x350" alt="">
        <p>3. Paga y envía</p>
      </div>
    </div>
  </section>
  <section class="container d-flex align-items-center">
    <div class="row">
      <div class="col-xs-12 col-md-6 d-flex flex-column align-items-center
          justify-content-center services services__send">
        <h3>Quiero enviar</h3>
        <p>
          Si quieres envíar tu carga, tenemos la flota perfecta para transportarla
        </p>
        <button type="button" class="btn btn-outline-primary">
          Click Aquí
          <ion-icon name="arrow-forward"></ion-icon>
        </button>
      </div>
      <div class="col-xs-12 col-md-6 d-flex flex-column align-items-center
          justify-content-center services services__ship">
        <h3>Quiero transportar</h3>
        <p>
          Más ingresos extras, utiliza tu flota al máximo, seguridad en el pago.
          <br>
          UNETE a nuestro equipo de transportistas AHORA.
        </p>
        <button type="button" class="btn btn-outline-secondary">
          Click Aquí
          <ion-icon name="arrow-forward"></ion-icon>
        </button>
      </div>
    </div>
  </section>
</main>
