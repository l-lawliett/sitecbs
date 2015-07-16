<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller {

	//

	public function create()
    {
        return view('pages.contact');
    }

    public function store(ContactFormRequest $request)
    {
	  return \Redirect::route('contact')
       ->with('message', 'Thanks for contacting Choice Business Solution us!');

    }

}
