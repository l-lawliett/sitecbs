<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Auth;


class authenticate extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	   public function authen()
    {

    	if (Auth::check())
		{
		    echo "IS authenticated";
		    // do all the database stuff that need to be done like check
		    // if the user uploaded their resume and stuff
		}else{

			return redirect()->to('http://localhost/cbsnew/public')->with('message', 'You must sign in to apply for a job post');
		}

    }

}
