<div class="container-fluid login">
    <div class="row h-60">
        <div class="col-sm-12 col-md-5 d-flex flex-column align-items-center justify-content-end -left">

            <strong>Iniciar Sesión</strong>
            <form method="POST" action="{{ route('AllUsersLogin') }}" class="sign -in">
                  @csrf

                  <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                <div class="remember">
                    <input type="checkbox" aria-label="Checkbox for following text input">
                    <label for=""> Recuérdame </a></label>
                </div>

                <div class="text-center">
                    <button class="btn m-btn--pill m-btn--air btn-warning -edit">Iniciar Sesión</button>
                </div>

            </form>
        </div>
        <div class="d-none col-md-7 d-md-flex flex-column align-items-center justify-content-center -right">
            <div class="intro">
                <p>Acceso a Usuarios de Enfadelivery</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis ante ut purus egestas feugiat id in turpis.</p>
            </div>
        </div>
    </div>
</div>
