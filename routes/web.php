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

Route::get('/usuarios/entrar', array('as' => '/user/signin', 'uses' => 'WebUserController@userLogin'));

// Hello Controllers

Route::get('/payms', 'HelloController@payms');

Route::get('/fb','HelloController@index');

Route::get('/fb2','HelloController@index2');

Route::get('/fb3','HelloController@index3');

Route::get('/registroFB','HelloController@userRegisterFB');

Route::post('/user/saveFB','HelloController@userSaveFB');

// Dog Controllers


// Owner APIs



Route::post('/user/login', 'OwnerController@login');

Route::post('/user/register', 'OwnerController@register');

Route::post('/user/location', 'DogController@set_location');

Route::any('/user/details', 'OwnerController@details');

Route::post('/user/addcardtoken', 'OwnerController@addcardtoken');

Route::get('/user/braintreekey', 'OwnerController@get_braintree_token');


Route::post('/user/deletecardtoken', 'OwnerController@deletecardtoken');

Route::post('/user/update', 'OwnerController@update_profile');

Route::post('/user/paydebt', 'OwnerController@pay_debt');

Route::post('/user/selectcard', 'OwnerController@select_card');

Route::post('/user/card_selection', 'OwnerController@card_selection');
//Route::get('/user', 'OwnerController@getProfile');
Route::get('/user', 'OwnerController@update_profile');
Route::any('/user/thing', 'DogController@create');

Route::post('/user/updatething', 'DogController@update_thing');

Route::post('/user/createrequest', 'DogController@create_request');

Route::post('/user/payment_type', 'OwnerController@payment_type');


Route::post('/user/createrequestlater', 'DogController@create_request_later');

//Route::post('/user/getproviders', 'DogController@get_providers');
//Route::post('/user/getproviders', 'DogController@get_providers_old');

Route::post('/user/getproviders_new', 'DogController@get_providers');


Route::post('/user/getprovidersall', 'DogController@get_providers_all');

Route::post('/user/getnearbyproviders', 'DogController@get_nearby_providers');

Route::post('/user/createrequestproviders', 'DogController@create_request_providers');




Route::post('/user/cancellation', 'DogController@cancellation');

Route::get('/user/getrequest', 'DogController@get_request');

Route::post('/user/cancelrequest', 'DogController@cancel_request');

Route::get('/server/schedulerequest', 'DogController@schedule_request');

Route::get('/user/getrequestlocation', 'DogController@get_request_location');

Route::post('/user/rating', 'DogController@set_walker_rating');


Route::get('/user/requestinprogress', 'DogController@request_in_progress');

Route::get('/user/requestpath', 'DogController@get_walk_location');

Route::get('/user/getadeudo', 'DogController@get_adeudo');

Route::get('/user/liquidar_adeudo', 'DogController@liquidar_adeudo');

Route::post('/user/solicitar_kourer', 'DogController@userRequestTrip2');

Route::get('/provider/requestpath', 'WalkerController@get_walk_location');

Route::post('/user/referral', 'OwnerController@set_referral_code');

Route::get('/user/referral', 'OwnerController@get_referral_code');

Route::post('/user/apply-referral', 'OwnerController@apply_referral_code');
Route::post('/user/apply-promo', 'OwnerController@apply_promo_code');

Route::get('/user/cards', 'OwnerController@get_cards');

Route::get('/user/history', 'OwnerController@get_completed_requests');


Route::post('/user/paybypaypal', 'OwnerController@paybypaypal');

Route::post('/user/paybybitcoin', 'OwnerController@paybybitcoin');

Route::post('/user/acceptbitcoin', 'OwnerController@acceptbitcoin');

Route::get('/user/send_eta', 'OwnerController@send_eta');

Route::get('/user/current_eta', 'DogController@eta');

Route::get('/user/credits', 'OwnerController@get_credits');

Route::get('/user/payment_options', array('as' => '/user/payment_options', 'uses' => 'OwnerController@payment_options_allowed'));

Route::get('/user/check_promo_code', 'DogController@check_promo_code');

Route::post('/user/logout', 'OwnerController@logout');

Route::post('/user/payment_select', 'DogController@payment_select');

Route::post('/user/provider_list', 'DogController@get_provider_list');

Route::post('/user/setdestination', 'DogController@user_set_destination');
