<?php namespace App\Http\Controllers;

use App\models\jobsDb;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Jobs extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$jobs = jobsDb::All();
		$name = 'hello';

		return view('pages.test', compact('jobs'));
	}

	

}
