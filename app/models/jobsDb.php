<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class jobsDb extends Model {

	//
	 protected $table = 'jobs';

	protected $fillable = [

		'id',
		'description',
		'title'

	];

}
