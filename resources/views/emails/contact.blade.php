{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')


		You received a message from Guest:

		<p>
		Name: {{ $name }}
		</p>

		<p>
		{{ $email }}
		</p>

		<p>
		{{ $user_message }}
		</p>

@stop