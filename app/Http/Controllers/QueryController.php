<?php
namespace Enfa\Http\Controllers;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;

class QueryController extends Controller
{

	public function search () {
  //
 }
 public function index () {
   // Gets the query string from our form submission
   //$query = Request::input('search');
   $owner_id = 1;
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
}
