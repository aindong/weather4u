<?php namespace Acme\Weather\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Acme\Weather\WeatherClass;

class WeatherServiceProvider extends ServiceProvider {

    public function register()
    {
        // Register the weatherclass instance container to our WeatherClass Object
        $this->app['weatherclass'] = $this->app->share(function($app)
        {
            return new WeatherClass;
        });

        // Shortcut
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Weather', 'Acme\Weather\Facades\WeatherClass');
        });
    }
}