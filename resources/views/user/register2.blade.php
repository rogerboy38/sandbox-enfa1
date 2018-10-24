<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../src/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/styles/app.css">
    <title>Enfa Delivery</title>
</head>
<body>
<div class="container-fluid login">
    <div class="row h-70">
        <div class="col-sm-12 col-md-5 d-flex flex-column align-items-center justify-content-end">

            <strong>Regístrate</strong>
            <p>Ingresa tus datos para crear tu cuenta</p>
            <form method="POST" action="{{ route('userRegister') }}" class="sign -in">
                @csrf
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineRadio1">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        Quiero enviar
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineRadio2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    Quiero transportar
                    </label>
                </div>
                <input id="user_id" type="text" placeholder="Usuario" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="user_id" value="{{ old('user_id') }}" required autofocus>

                @if ($errors->has('user_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('user_id') }}</strong>
                    </span>
                @endif
                <input id="name" type="text" placeholder="Nombre Completo" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <input id="password-confirm" type="password"  placeholder="Confirmar Password" class="form-control" name="password_confirmation" required>

                <div class="text-center">
                  <button type="submit" class="btn m-btn--pill m-btn--air btn-warning -edit">
                      {{ __('Registrarme') }}
                  </button>

                </div>

            </form>
            <div class="terms">
                <input type="checkbox" aria-label="Checkbox for following text input">
                <label for=""> Estoy de acuerdo <a href="">con los terminos y condiciones</a></label>
            </div>
        </div>
        <div class="d-none col-md-7 d-md-flex flex-column align-items-center justify-content-center -right">
            <div class="intro">
                <p>Registro Usuarios Enfadelivery</p>
                <p>Para Cotizar necesitamos tus datos, se te enviara un mail con tu cotizacion.</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
