@extends('app')

@section('content')

<div class="account-container">
	
	<div class="content clearfix">
		
		<form method="POST" action="{{ url('/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
			<h1>Member Login</h1>	

		  <div>

			@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
	
			</div>


			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="email" id="username" name="email" value="{{ old('email') }}" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				<button class="button btn btn-success btn-large">Sign In</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->

<div class="login-extra">
	<a href="{{ url('/password/email') }}">Reset Password</a>
</div> <!-- /login-extra -->


<script src="{{asset('css/js/jquery-1.7.2.min.js') }}"></script>
<script src="{{asset('css/js/bootstrap.js') }}"></script>

<script src="{{asset('css/js/signin.js')}}"></script>
@endsection
