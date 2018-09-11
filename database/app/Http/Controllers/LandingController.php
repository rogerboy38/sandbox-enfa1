<?php
namespace Enfa\Http\Controllers;

class LandingController extends Controller
{
//use Illuminate\Support\Facades\DB;
//use Enfa\Models\State as States;
//use Enfa\State as States;
//use Illuminate\Support\Facades\View;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


	//	$states=State::lists('state', 'state_code');
		//		return View::make("landing.create", compact('states'));
		return \View::make("landing.create");


	 	//return View::make('hello');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//return View::make("landing.create");
	 	//return View::make('hello');
		return \View::make("landing.content2");

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

	public function login()
	{

		return \View::make("user.login");

	}

	public function userRegister()
	{
        return \View::make("user.register");
  }

	public function quieroEnviar()
	{
        return \View::make("info.quieroEnviar");
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
