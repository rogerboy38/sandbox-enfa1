<!DOCTYPE html>
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
                <li class="active"><a href="#"><ion-icon name="globe"></ion-icon>Marketplace</a></li>
                <li>
                  <h4> Mi perfil</h4>
                  <ul>
                    <li><a href="#"><ion-icon name="finger-print"></ion-icon>Mis datos personales</a></li>
                    <li><a href="#"><ion-icon name="document"></ion-icon>Documentos</a></li>
                    <li><a href="#"><ion-icon name="clipboard"></ion-icon>Mis direcciones de Facturación</a></li>
                  </ul>
                </li>
                <li><a href="orders.html"><ion-icon name="paper-plane"></ion-icon>Mis envios</a></li>
                <li><a href="#"><ion-icon name="bus"></ion-icon></ion-icon>Mis flotas</a></li>
                <li><a href="#"><ion-icon name="heart"></ion-icon>Favoritos</a></li>
                <li><a href="#"><ion-icon name="card"></ion-icon>Métodos de Pago</a></li>
              </ul>
            </nav>
          </section>
          <section class="col-md-9 dashboard__user" role="main">
            <div class="dashboard__user__results">
              <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-aqua"><ion-icon name="settings"></ion-icon></span>
                    <div class="info-box-content">
                      <span class="info-box-text">CPU Traffic</span>
                      <span class="info-box-number">90<small>%</small></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-red"><ion-icon name="logo-facebook"></ion-icon></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Likes</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-yellow"><ion-icon name="people"></ion-icon></span>
                    <div class="info-box-content">
                      <span class="info-box-text">New Members</span>
                      <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-green"><ion-icon name="cart"></ion-icon></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Sales</span>
                      <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
              </div>
              </div>
              <form class="form-inline form__dashboard">
                <div class="form-group flex-column align-items-start">
                  <label for="">Origen</label>
                  <input type="text" class="form-control" value="CDMX">
                </div>
                <div class="form-group flex-column align-items-start">
                  <label for="">Destino</label>
                  <input type="text" class="form-control" value="Tijuana">
                </div>
                <div class="form-group flex-column align-items-start">
                  <label for="">Fecha</label>
                  <input type="date" class="form-control" >
                </div>
                <div class="form-group flex-column align-items-start">
                  <label for="">Tipo</label>
                  <select class="custom-select">
                    <option selected>Opción uno</option>
                    <option value="1">Opción dos</option>
                    <option value="2">Opción tres</option>
                  </select>
                </div>
              </form>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>disponible</td>
                    <td>tipo 1</td>
                    <td>CDMX</td>
                    <td>Tijuana</td>
                    <td><a href="#">Cotizar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>disponible</td>
                    <td>tipo 2</td>
                    <td>Thornton</td>
                    <td>Denver</td>
                    <td><a href="#">Cotizar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>disponible</td>
                    <td>tipo 3</td>
                    <td>Guadalajara</td>
                    <td>San Luis</td>
                    <td><a href="#">Cotizar</a></td>
                  </tr>
                </tbody>
              </table>


            </div>
          </section>
        </div>
      </main>
    </div>
    <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
  </body>
</html>
