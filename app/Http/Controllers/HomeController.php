<?php

namespace Enfa\Http\Controllers;

use Enfa\Http\Controllers\Auth;
use Enfa\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Enfa\Models\State as States;
use Enfa\users as users;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\View;
use Enfa\filters;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Theme;
use Redirect;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function userHome()
    {
        return view('user.home');
    }
    public function providerHome()
    {
        return view('provider.home');
    }
    public function logout()
    {
      //return view('web.gracias');
      return Redirect::to('/landing');
    }
    public function index()
    {
      //return view('web.gracias');
      return Redirect::to('/userAll');
    }
}
