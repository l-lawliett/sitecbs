<?php namespace App\Http\Controllers;

use App\models\jobsDb;
class WelcomeController extends Controller {

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
	
	public function index()
	{
		//
		$bool = 'APPROVED';
		$jobcount = jobsDb::where('status', '=', $bool)->count();
		//$users = jobsDb::paginate(8);
		
		
		$jobs = jobsDb::where('status', '=', $bool)->where('title', '<>', '')->where('description', '<>', '')
                    ->whereNotNull('title')->whereNotNull('description')->orderBy('updated_at', 'DESC')->paginate(3); 
		// $jobs = jobsDb::All();
		// $jobs = jobsDb::where('active', '=', 1)->orderBy('updated_at', 'DESC')->take(10)->skip()->get(); 
		$name = 'hello';

		return view('pages.home', compact('jobs', 'jobcount'))->render();
	}




}
