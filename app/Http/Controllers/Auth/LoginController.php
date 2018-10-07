<?php

namespace Enfa\Http\Controllers\Auth;

use Enfa\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Input;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
  //cuando funcione el marketplace de Rubi
  // protected $redirectTo = '/marketplace';
  //protected $redirectTo = '/userTrips';

  protected $redirectTo = '/userAll';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function authenticated() {
      //logear Admin
      return redirects ('admin/report');
    }

    public function secret() {
      //metodo secret, para administradores
      return 'Hola '. auth('admins')->user()->name."bienvenido";

    }

    public function login() {
    //

    }

    public function ShowAllUserAccess()
    {
      $error = Input::get('error');
      $email = Input::get('email');
      $password = Input::get('password');
      $token = Input::get('_token');
      //return ('$email = '. $email . 'pass =' . $password . 'token = ' . $token . 'fin');

      return \View::make('layouts.app')
      ->with('title', 'My ' . \Config::get('app.generic_keywords.Trip') . 's')
      -> with($email)
      -> with($password)
      -> with($token);

    }
}
