<?php

namespace Enfa\Providers;

use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Enfa\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
      parent::boot();

                /*
          |--------------------------------------------------------------------------
          | Application & Route Filters
          |--------------------------------------------------------------------------
          |
          | Below you will find the "before" and "after" events for the application
          | which may be used to do any work before or after a request into your
          | application. Here you may also register your custom route filters.
          |
          */

          //App::before(function($request)
          //{
          //
          //});


          //App::after(function($request, $response)
          //{
          //
          //});

          /*
          |--------------------------------------------------------------------------
          | Authentication Filters
          |--------------------------------------------------------------------------
          |
          | The following filters are used to verify that the user of the current
          | session is logged into this application. The "basic" filter easily
          | integrates HTTP Basic authentication for quick, simple checking.
          |
          */

          Route::middleware('auth', function()
          {
          if (Auth::guest())
          {
            if (Request::ajax())
            {
              return Response::make('Unauthorized', 401);
            }
            else
            {
              return Redirect::guest('login');
            }
          }
          });


          Route::middleware('auth.basic', function()
          {
          return Auth::basic();
          });

          /*
          |--------------------------------------------------------------------------
          | Guest
          |--------------------------------------------------------------------------
          |
          | The "guest" filter is the counterpart of the authentication filters as
          | it simply checks that the current user is not logged in. A redirect
          | response will be issued if they are, which you may freely change.
          |
          */

          Route::middleware('guest', function()
          {
          if (Auth::check()) return Redirect::to('/');
          });

          /*
          |--------------------------------------------------------------------------
          | CSRF Protection Filter
          |--------------------------------------------------------------------------
          |
          | The CSRF filter is responsible for protecting your application against
          | cross-site request forgery attacks. If this special token in a user
          | session does not match the one given in this request, we'll bail.
          |
          */
          Route::middleware('new_installation',function()
          {
          if(Config::get("database.connections.mysql.database") != "")
          {
          if(Admin::first())
          {
          return Redirect::route('admin');
          }
          }
          });

          Route::middleware('csrf', function()
          {
          if (Session::token() != Input::get('_token'))
          {
            throw new Illuminate\Session\TokenMismatchException;
          }
          });


    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
