<?php

class HomeController extends BaseController {


    /**
     * The Homepage
     *
     * @return mixed
     */
	public function index()
    {
        Weather::sayHello();
        //return View::make('home.index');
    }

}
