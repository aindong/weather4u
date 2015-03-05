<?php namespace Acme\Weather\Facades;

use Illuminate\Support\Facades\Facade;

class WeatherClass extends Facade {
    protected static function getFacadeAccessor() { return 'weatherclass'; }
}