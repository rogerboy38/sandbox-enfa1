<?php
namespace Enfa\Providers;


use Illuminate\Support\ServiceProvider;
use Enfa\Validator\CustomValidator;
use Illuminate\Http\Request;
use Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
    */
    public function boot()
    {
        //Validator::resolver(function($translator, $data, $rules, $messages)
        //{
        //    return new CustomValidator($translator, $data, $rules, $messages);
        //});
        //Bugsnag::registerCallback(function($report) {
        //...
        //});

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
