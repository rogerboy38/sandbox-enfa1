+<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Enfa Delivery</title>
  </head>
  <body>
    <div class="container-fluid dashboard">
      <header class="d-flex flex-column">
        <div class="row mb-4">
          <div class="col-md-6">
            <a href="/">
              <img class="logo-dash" src="img/logo.svg" alt="Enfa">
            </a>
          </div>
          <div class="col-md-6 d-flex align-items-center justify-content-end">
            <div class="dashboard__user-name">
              <ion-icon name="contact"></ion-icon>
              Buenas tardes <strong> Arturo Alvarez</strong>
            </div>
            <a href="#" class="dashboard__exit"><ion-icon name="log-out"></ion-icon>Salir</a>
          </div>
        </div>
      </header>
      <main>

        <div class="row">

          <section class="col-xs-12 col-md-3 dashboard__user-nav">
            <nav>
              <ul>
                <li><a href="marketplace.html"><ion-icon name="globe"></ion-icon>Marketplace</a></li>
                <li>
                  <h4> Mi perfil</h4>
                  <ul>
                    <li><a href="#"><ion-icon name="finger-print"></ion-icon>Mis datos personales</a></li>
                    <li><a href="#"><ion-icon name="document"></ion-icon>Documentos</a></li>
                    <li><a href="#"><ion-icon name="clipboard"></ion-icon>Mis direcciones de Facturación</a></li>
                  </ul>
                </li>
                <li  class="active"><a href="orders.html"><ion-icon name="paper-plane"></ion-icon>Mis envios</a></li>
                <li><a href="#"><ion-icon name="bus"></ion-icon></ion-icon>Mis flotas</a></li>
                <li><a href="#"><ion-icon name="heart"></ion-icon>Favoritos</a></li>
                <li><a href="#"><ion-icon name="card"></ion-icon>Métodos de Pago</a></li>
              </ul>
            </nav>
          </section>
          <section class="col-md-9 dashboard__user" role="main">
            <div class="user-orders">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title pt-2 mb-2">Últimas órdenes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Carga</th>
                        <th>Tipo</th>
                        <th>Status</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>CDMX -> Tijuana</td>
                        <td>---</td>
                        <td><span class="label label-success">Shipped</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Denver -> Aurora</td>
                        <td>---</td>
                        <td><span class="label label-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>Guadalajara -> Baja California</td>
                        <td>---</td>
                        <td><span class="label label-danger">Delivered</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>Morelos -> Yucatán </td>
                        <td>---</td>
                        <td><span class="label label-info">Processing</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Mérida -> Tampico</td>
                        <td>---</td>
                        <td><span class="label label-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>Zacatecas -> Morelos</td>
                        <td>---</td>
                        <td><span class="label label-danger">Delivered</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Edo. de México -> San Luis</td>
                        <td>---</td>
                        <td><span class="label label-success">Shipped</span></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="#" class="btn btn-sm btn-default btn-flat pull-right">Ver todas las órdenes</a>
                </div>
                <!-- /.box-footer -->
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
    <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
  </body>
</html>
