<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	//
	public function about()
	{

		$startNum = 1;
		return view('pages.about', compact('startNum'));
	}

		public function service()
	{

		$startNum = 1;
		return view('pages.service', compact('startNum'));
	}

		public function jobs()
	{
		$startNum = 1;
		return view('pages.jobs', compact('startNum'));
	}



//Sub tabs which listed under Services
    public function outSourcing()
	{
		$startNum = 1;
		return view('pages.services.outsourcing', compact('startNum'));
	}

	  public function payRoll()
	{
		$startNum = 1;
		return view('pages.services.payroll', compact('startNum'));
	}

	  public function hrServices()
	{	
		$startNum = 1;
		return view('pages.services.hrservices', compact('$startNum'));
	}

	  public function training()
	{
		$startNum = 1;
		return view('pages.services.training', compact('startNum'));
	}

	  public function recruitment()
	{
		$startNum = 1;
		return view('pages.services.recruitment', compact('startNum'));
	}

	  public function consultation()
	{

		$startNum = 1;
		return view('pages.services.consultation', compact('startNum'));
	}


//Sub tabs which listed under Training
    public function projectManagement()
	{
		$startNum = 1;
		return view('pages.courses.projectManagement', compact('startNum'));
	}

	  public function onSiteProManagement()
	  {
	
		$startNum = 1;
	return view('pages.courses.onSiteProManagement', compact('startNum'));
	}

	  public function operationalProjectManagement()
	{
		$startNum = 1;
		return view('pages.courses.operationalProjectManagement', compact('startNum'));
	}

	  public function fastTrackProjectManagement()
	{
			$startNum = 1;
		return view('pages.courses.fastTrackProjectManagement', compact('startNum'));
	}

	  public function customerService()
	{
		$startNum = 1;
		return view('pages.courses.customerService', compact('startNum'));
	}

	  public function pro()
	{
		$startNum = 1;
		return view('pages.services.outsourcing', compact('startNum'));
	}

}
