<?php
namespace Enfa\Http\Controllers;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
USE View;
use \Enfa\LandingController;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Session;
use Illuminate\Support\Facades\Redirect;
use URL;
use Datatables;
use \Enfa\Availables;

class QueryController extends Controller
{

	public function search () {
  //
	return 'en search';
 }
 public function list_availables(){
 return view('web.listadoAvailables');
 }

 public function data_availables() {
 	return Datatables::of(\Enfa\Availables::where( 'destino' , '=' , 'Monterrey')
 						->where('origen' , '=', 'Torreon')->get()) -> make(true);
 }
 public function create()
 {
 		return view('web.listadoAvailables');
 }
 public function index4()
 {

		/* $data = [
			 "title" => "Productos",
        "products" => [

            ["name" => "Id", "price" => 2.4],
            ["name" => "Status", "price" => 1.4],
            ["name" => "Tipo de carga", "price" => 0.4],
						["name" => "CargaOrigen", "price" => 0.4],
						["name" => "CargaDestino", "price" => 0.4],
						["name" => "Tamaño de caja", "price" => 0.4],
        ]
		 ];
		 */
		 // aqui formar lista de Disponible
		 $data = Datatables::of(\Enfa\Availables::where( 'destino' , '=' , 'Monterrey')
	  						->where('origen' , '=', 'Torreon')->get()) -> make(true);
     //return view('web.listadoAvailables')->with($data);
		 return $data;
 }
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

				return Datatables::of(\Enfa\Availables::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // Gets the query string from our form submission
   //$query = Request::input('search');
  /* $owner_id = 1;
   $query = '1';
   $time_limit = 1;
   $current_request = \Enfa\Requests::where('owner_id', $owner_id)
           ->where('is_cancelled', 0)
           ->where('created_at', '>', $time_limit)
           ->orderBy('created_at', 'desc')
           ->where(function($query) {
               $query->where('status', 0)->orWhere(function($query_inner) {
                   $query_inner->where('status', 1)
                   ->where('confirmed_walker', '>', 0);
               });
           })
           ->first();
           $origen =  array();
           $destino = array();
   // Returns an array of articles that have the query string located somewhere within
   // our articles titles. Paginates them so we can break up lots of search results.
   $favoritos = \Enfa\Favoritos::where('owner_id', 'LIKE', '%' . $query . '%')
                                  ->where('borrado', '=', 0)
                                  ->where('origen', '=' , 'Monterrey')
                                  ->where('destino', 'LIKE', '%' . 'm' . '%')
                                  ->get();
   //   $favoritos = DB::table('favoritos')->where('owner_id', 'LIKE', '%' . $query . '%')->paginate(10);
   $types = \Enfa\ProviderType::where('is_visible', '=', 1)->get();
   $types_dim = \Enfa\ProviderType::where('is_visible', '=', 2)->get();



   foreach ($favoritos as $key) {
       $origen[] = $key->origen;
       $destino[] = $key->destino;
   }

  //return $origen;
  //return $destino;
   $types = '1';
   $types_dim='48ft';
   // returns a view and passes the view the list of articles and the original query.
   return view ('landing.form.search', compact('origen',$origen, 'destino',$destino, 'types',$types, 'types_dim',$types_dim));

}
*/

public function index3(){
	//$controller = new LandingController;
	//		return $controller->getOrigenDestino();
	$owner =array();
/*	if (Session::has('pre_login_url')) {
			$url = Session::get('pre_login_url');
			Session::forget('pre_login_url');
			return Redirect::to($url);
	} else {
			return Redirect::to('/user/register');
	}
	*/

	if (Session::has('user_id')){
		 $owner_id = Session::get('user_id');

	} else {
		 $owner_id = 1;
		 Session::put('user_id' , '1');

	}



	if (Session::has('user_id')) {
			Session::put('pre_login_url', URL::current());
		//	return Redirect::to('/userRegister');
		//	return Redirect::to('/landing/guestQueries');
		$user_id = 1;
		Session::put('user_id' , '1');
			$owner = \Enfa\Owners::where('id', $user_id)->first();
			//return $owner;
	} else {
			$user_id = Session::get('user_id');
			$owner = \Enfa\Owners::where('id', $user_id)->first();
			//return $owner;
			Session::put('user_name', $owner->first_name . " " . $owner->last_name);
			Session::put('user_pic', $owner->picture);

	}


	$destino = \Enfa\Cities::all(['ZIPCode', 'city' , 'city_status'])->where('city_status','=', 600);
	$origen = \Enfa\Cities::all(['ZIPCode', 'city' , 'city_status'])->where('city_status','=', 600);
	$cities = \Enfa\Cities::all(['ZIPCode', 'city' , 'city_status'])->where('city_status','=', 600);
	$types = \Enfa\ProviderType::where('is_visible', '=', 1)->get();
	$types_dim = \Enfa\ProviderType::where('is_visible', '=', 2)->get();
	return View::make('web.layoutenviar', compact('origen',$origen, 'destino',$destino,'cities',$cities, 'types',$types, 'types_dim',$types_dim, 'user_id',$user_id, 'owner', $owner));

}


}
