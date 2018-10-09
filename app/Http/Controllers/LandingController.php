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
use Illuminate\Support\Facades\Config;
use \Input;
use Session;


class LandingController extends Controller
{
  use RegistersUsers;
	public function ShowRegistrationForm ( )
	{
		return view('auth.register')
    ->with('title', 'My ' . Config::get('app.generic_keywords.Trip') . 's');
	}
	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/userAll';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
			$this->middleware('guest');
	}
	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
			return Validator::make($data, [
					'user_id' => 'required|string|max:255|unique:users',
					'name' => 'required|string|max:255',
					'email' => 'required|string|email|max:255|unique:users',
					'password' => 'required|string|min:6|confirmed',
			]);
	}
	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \Enfa\User
	 */
	protected function create(array $data)
	{
			return \Enfa\Users::create([
					'user_id' => $data['user_id'],
					'name' => $data['name'],
					'email' => $data['email'],
					'password' => Hash::make($data['password']),
			]);

	}

  public function getOrigenDestino() {

        $cities = \Enfa\Cities::all(['ZIPCode', 'city' , 'city_status'])->where('city_status','=', 600);
        $types = \Enfa\ProviderType::where('is_visible', '=', 1)->get();
        $types_dim = \Enfa\ProviderType::where('is_visible', '=', 2)->get();
        return View::make('landing.create', compact('cities',$cities, 'types',$types, 'types_dim',$types_dim));

  }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

    //$users = \Enfa\Users::All();
		//return \View::make("landing.create", compact('users'));
    $controller = new LandingController;
    return $controller->getOrigenDestino();
    /*
    $cities = \Enfa\Cities::all(['ZIPCode', 'city' , 'city_status'])->where('city_status','=', 600);
    $types = \Enfa\ProviderType::where('is_visible', '=', 1)->get();
    $types_dim = \Enfa\ProviderType::where('is_visible', '=', 2)->get();
    return View::make('landing.create', compact('cities',$cities, 'types',$types, 'types_dim',$types_dim));
    */
	 	//return $cities;
	}

public function marketplace()
{

  	 	return View::make('welcome');

}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create2()
	{
    /*
    return \Enfa\Favoritos::create([
        'user_id' => $data['user_id'],
        'mandado' => $data['mandado'],
        'origen' => $data['origen'],
        'destino' => $data['destino'],
        'fecha' => $data['fecha'],
    ]);
    */
    return View::make('welcome');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


		/**
		 * login user.
		 *
		 * @param  int  $user
		 * @return Response
		 */
	public function userLogin()

	//	$states=State::lists('state', 'state_code');
		//		return View::make("landing.create", compact('states'));


	{
			return \View::make("user.login")
      ->with('title', 'My ' . Config::get('app.generic_keywords.Trip') . 's');
	}

  public function providerLogin()
  {
      return \View::make("provider.login")
        ->with('title', 'My ' . Config::get('app.generic_keywords.Trip') . 's');;
  }

	public function userRegister()
	{
        return \View::make("user.register")
        ->with('title', 'My ' . Config::get('app.generic_keywords.Trip') . 's');
  }

	public function quieroEnviar()

	{
        $origen=Input::get('origen');
        $destino=Input::get('destino');
        $owner_id = Session::get('user_id');
        $type = Input::get('type');
        $date= Input::get('date');
        return \View::make("web.layoutenviar")
        ->with('title', 'My ' . Config::get('app.generic_keywords.Trip') . 's')
        ->with('origen', $origen)
        ->with('destino', $destino)
        ->with('owner_id', $owner_id)
        ->with('date', $date)
        ->with('type', $type);
  }

	public function quieroTransportar()
	{
				return \View::make("info.quieroTransportar");
	}

	public function ayuda()
	{
				return \View::make("info.ayuda");
	}

	public function termsandconditions()
	{
				return \View::make("info.termsandconditions");
	}

	public function privacidad()
	{
				return \View::make("info.PoliticadePrivacidad");
	}

}
