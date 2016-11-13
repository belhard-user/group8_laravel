<?php

namespace App\Providers;

use App\Testprovider\IFoo;
use Illuminate\Support\ServiceProvider;

class FooProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*view()->composer('layouts.main', function($view){
            $view->with('year', date('Y'));
        });*/

        view()->share('year', date('Y'));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // app('foo')
        $this->app->singleton(IFoo::class, function($app, $params){
            if(count($params) == 0){
                $params = ['A', 'B'];
            }

            return $app->make(\App\Testprovider\Bar::class);
            //return $app->make(\App\Testprovider\Foo::class, $params);
        });
    }
}
