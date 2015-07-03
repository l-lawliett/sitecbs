<?php namespace App\Http\Controllers;

use App\models\jobsDb;
use Input; 
class Search extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	
	public function search() {

    $q = Input::get('title');
   $r = Input::get('location');

   $startNum = 1;


   if (isset($q) && empty($r)) {
   					$query = jobsDb::where('title', '=', "{$q}")
              ->orderBy('updated_at', 'DESC')->paginate(10);

             $results = $query;

    		 return view('pages.services', compact('results', 'jobcount', 'startNum'))->render();
   			}
   		if (isset($r) && empty($q)) {
   					$query = jobsDb::where('location', '=', "{$r}")
              ->orderBy('updated_at', 'DESC')->paginate(10);

             $results = $query;

    		 return view('pages.services', compact('results', 'jobcount', 'startNum'))->render();
   			}
   			if(isset($q) && isset($r)){
   				$query = jobsDb::where('title', '=', "{$q}")
              ->where('location', '=', "{$r}")
              ->orderBy('updated_at', 'DESC')->paginate(10);

             $results = $query;

    		 return view('pages.services', compact('results', 'jobcount', 'startNum'))->render();
              
   			}
   			

    // $query = jobsDb::where('title', '=', "{$q}")
    //          ->where('location', '=', "{$r}")->orWhere('title', '=', "{$q}")
    //          ->orWhere('location', '=', "{$r}")
    //          ->orderBy('updated_at', 'DESC')->paginate(10);  

    // $jobcount = jobsDb::where('title', 'LIKE', "%{$q}%")
    //          ->orWhere('location', 'LIKE', "%{$r}%")->count();

    // $results = $query;

    // return view('pages.services', compact('results', 'jobcount'))->render();

	}



}
