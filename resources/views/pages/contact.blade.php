{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
<body class="services">


 @include('pages.headers.contactHeader')
     <div id="foyer">
        </div>
        <div class="container">
            <div id="main">
            
            <h1 style="color:##4e331a">Just fill out the form below and send us a message?</h1>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                <div class="form-group">
                    {!! Form::label('Your Name') !!}
                    {!! Form::text('name', null, 
                        array('required', 
                              'class'=>'form-control', 
                              'placeholder'=>'Your name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your E-mail Address') !!}
                    {!! Form::text('email', null, 
                        array('required', 
                              'class'=>'form-control', 
                              'placeholder'=>'Your e-mail address')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your Message') !!}
                    {!! Form::textarea('message', null, 
                        array('required', 
                              'class'=>'form-control', 
                              'placeholder'=>'Your message')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Contact Us!', 
                      array('class'=>'btn btn-primary')) !!}
                </div>
                {!! Form::close() !!}
            </div> <!-- end: main -->
        </div> <!-- end: container -->
       @include('pages.contentFooter')
    
       @include('scripts.tabScripts')

@stop

