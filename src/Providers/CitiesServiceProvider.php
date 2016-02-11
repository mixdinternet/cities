<?php

namespace Mixdinternet\Cities\Providers;

use Illuminate\Support\ServiceProvider;
use Mixdinternet\Cities\State;
use Mixdinternet\Cities\City;

class CitiesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            $this->app->router->group(['namespace' => 'Mixdinternet\Cities\Http\Controllers'],
                function () {
                    require __DIR__ . '/../Http/routes.php';
                });
        }

        $this->publishes([
            __DIR__ . '/../database/migrations' => base_path('database/migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/seeds' => base_path('database/seeds'),
        ], 'seeds');

        $this->app->router->bind('states', function ($id) {
            $state = State::find($id);
            if (!$state) {
                abort(404);
            }

            return $state;
        });

        $this->app->router->bind('cities', function ($id) {
            $city = City::find($id);
            if (!$city) {
                abort(404);
            }

            return $city;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
