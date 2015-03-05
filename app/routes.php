<?php


/**
 * Homepage route
 */
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);