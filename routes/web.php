<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landing', 'LandingController@index');

Route::get('login','LandingController@login');

Route::get('userRegister','LandingController@userRegister');

Route::get('quieroTransportar','LandingController@quieroTransportar');

Route::get('quieroEnviar','LandingController@quieroEnviar');

Route::get('ayuda','LandingController@ayuda');

Route::get('termsandconditions','LandingController@termsandconditions');

Route::get('privacidad','LandingController@privacidad');

Route::get('/landing/create', 'LandingController@create');
