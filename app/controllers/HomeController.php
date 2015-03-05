<?php

class HomeController extends BaseController {


    /**
     * The Homepage
     *
     * @return mixed
     */
	public function index()
    {
        $city = 'tarlac';
        $country = 'ph';

        if (Input::has('city') && Input::has('country')) {
            $city = Input::get('city');
            $country = Input::get('country');
        }

        $request = $city . ',' . $country;

        $weather = (object)Weather::getWeatherByCity($request);

        return View::make('home.index')
            ->with('weather', $weather);
    }

}
