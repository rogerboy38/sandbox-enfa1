
  <header class="d-flex flex-column">

      <div class="row mb-4">

        <div class="col-md-6">

          <a href="index.html">

            <img class="logo-dash" src="{{ asset('src/images/logo.svg') }}" alt="Enfa">

          </a>

        </div>

        <div class="col-md-6 d-flex align-items-center justify-content-end">

          <div class="dashboard__user-name">

            <ion-icon name="contact"></ion-icon>

            Buenas tardes <strong> {{$owner->first_name}} </strong>

          </div>

          <a href="#" class="dashboard__exit"><ion-icon name="log-out"></ion-icon>Salir</a>

        </div>

      </div>

    </header>
