<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	//
	public function about()
	{
		return view('pages.about');
	}

		public function service()
	{
		return view('pages.service');
	}

		public function jobs()
	{
		return view('pages.jobs');
	}



//Sub tabs which listed under Services
    public function outSourcing()
	{
		return view('pages.services.outsourcing');
	}

	  public function payRoll()
	{
		return view('pages.services.payroll');
	}

	  public function hrServices()
	{
		return view('pages.services.hrservices');
	}

	  public function training()
	{
		return view('pages.services.training');
	}

	  public function recruitment()
	{
		return view('pages.services.recruitment');
	}

	  public function consultation()
	{
		return view('pages.services.consultation');
	}


//Sub tabs which listed under Training
    public function projectManagement()
	{
		return view('pages.courses.projectManagement');
	}

	  public function onSiteProManagement()
	{
		return view('pages.courses.onSiteProManagement');
	}

	  public function operationalProjectManagement()
	{
		return view('pages.courses.operationalProjectManagement');
	}

	  public function fastTrackProjectManagement()
	{
		return view('pages.courses.fastTrackProjectManagement');
	}

	  public function customerService()
	{
		return view('pages.courses.customerService');
	}

}
