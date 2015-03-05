<?php

class HomeController extends BaseController {


    /**
     * The Homepage
     *
     * @return mixed
     */
	public function index()
    {
        return View::make('home.index');
    }

}
