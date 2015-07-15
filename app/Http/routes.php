<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'HomeController@index');
Route::get('/', array('as'=>'home','uses'=>'WelcomeController@index'));
Route::get('/search', array('as'=>'search','uses'=>'Search@search'));
Route::get('/start', array('as'=>'start','uses'=>'Start@index'));
Route::get('/apply', array('as'=>'apply','uses'=>'Authenticate@authen'));

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);

Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);

//Route::get('/', array('as'=>'fakehome','uses'=>'WelcomeController@newIndex'));

// Route::get('/{id}', function ($id) {

		
// 			if (empty($id)) {
// 				return redirect()->Route('home');
// 			}elseif ($id==2) {
				
// 			}
    
// });
//Route::get('/sales', array('as'=>'mod','uses'=>'WelcomeController@index'));
Route::get('/about', array('as'=>'about','uses'=>'PageController@about'));
Route::get('/jobs', array('as'=>'job','uses'=>'PageController@jobs'));
Route::get('/services', array('as'=>'service','uses'=>'PageController@service'));
//Route::get('/job', 'Jobs@index');


Route::get('/services/workforce_outsourcing', array('as'=>'outsrc','uses'=>'PageController@outsourcing'));
Route::get('/services/training', array('as'=>'trnng','uses'=>'PageController@training'));
Route::get('/services/payroll', array('as'=>'pay','uses'=>'PageController@payRoll'));
Route::get('/services/hrservices', array('as'=>'hrsrv','uses'=>'PageController@hrServices'));
Route::get('/services/recruitment', array('as'=>'recruite','uses'=>'PageController@recruitment'));
Route::get('/services/consultation', array('as'=>'consult','uses'=>'PageController@consultation'));



Route::get('/training/projectmanagement', array('as'=>'pgmnt','uses'=>'PageController@projectManagement'));
Route::get('/services/onSiteProManagement', array('as'=>'onsite','uses'=>'PageController@onSiteProManagement'));
Route::get('/services/operationalProjectManagement', array('as'=>'opm','uses'=>'PageController@operationalProjectManagement'));
Route::get('/services/fastTrackProjectManagement', array('as'=>'ftpm','uses'=>'PageController@fastTrackProjectManagement'));
Route::get('/services/customerService', array('as'=>'cus','uses'=>'PageController@customerService'));


//start

// Route::get('start/search', array('as'=>'search','uses'=>'Search@search'));
// Route::get('start/apply', array('as'=>'apply','uses'=>'Authenticate@authen'));

// Route::get('start/about', array('as'=>'about','uses'=>'PageController2@about'));
// Route::get('start/jobs', array('as'=>'job','uses'=>'PageController2@jobs'));
// Route::get('start/services', array('as'=>'service','uses'=>'PageController2@service'));
// //Route::get('/job', 'Jobs@index');


// Route::get('start/services/workforce_outsourcing', array('as'=>'outsrc','uses'=>'PageController2@outsourcing'));
// Route::get('start/services/training', array('as'=>'trnng','uses'=>'PageController2@training'));
// Route::get('start/services/payroll', array('as'=>'pay','uses'=>'PageController2@payRoll'));
// Route::get('start/services/hrservices', array('as'=>'hrsrv','uses'=>'PageController2@hrServices'));
// Route::get('start/services/recruitment', array('as'=>'recruite','uses'=>'PageController2@recruitment'));
// Route::get('start/services/consultation', array('as'=>'consult','uses'=>'PageController2@consultation'));



// Route::get('start/training/projectmanagement', array('as'=>'pgmnt','uses'=>'PageController2@projectManagement'));
// Route::get('start/services/onSiteProManagement', array('as'=>'onsite','uses'=>'PageController2@onSiteProManagement'));
// Route::get('start/services/operationalProjectManagement', array('as'=>'opm','uses'=>'PageController2@operationalProjectManagement'));
// Route::get('start/services/fastTrackProjectManagement', array('as'=>'ftpm','uses'=>'PageController2@fastTrackProjectManagement'));
// Route::get('start/services/customerService', array('as'=>'cus','uses'=>'PageController2@customerService'));





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
