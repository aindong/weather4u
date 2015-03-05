<?php namespace Acme\Weather\Facades\WeatherClass;

use Illuminate\Support\Facades\Facade;

class WeatherClass extends Facade {
    protected static function getFacadeAccessor() { return 'weatherclass'; }
}