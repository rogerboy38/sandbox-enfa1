<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace Enfa\Http\Controllers;

use Enfa\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package Enfa\Http\Controllers
 */
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
     * @return Response
     */
    public function index()
    {
        //return view('adminlte::home');
         return 'aqui en home index';
    }
}
