<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/*public function showWelcome()
	{
		return View::make('hello');
	}*/

    public function home()
    {
        //echo $user = User::find(1)->username;
        //echo '<pre>', print_r($user), '</pre>';
        Mail::send('emails.auth.test', array('name' => 'Shahed Ruhi'), function($message){
            $message->to('shahedruhi@gmail.com', 'Shahed Ruhi')->subject('Test Email');
        });

        return View::make('home');
    }

}
