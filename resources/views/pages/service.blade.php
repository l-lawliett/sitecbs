{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
<body class="services">
@if ($startNum == 2)
        @include('pages.headers.startHeaders.servHeader')
 @else
         @include('pages.headers.servHeader')

@endif
     
        <div id="foyer">
        </div>
        <div class="container">
            <div class="clearfix" id="main">
                <div class="col-xs-12 col-md-9 pull-right">
                    <h1>Services</h1>
                    <div class="row-divider col-xs-12"></div>

                    <div class="row">
                    <div class="service col-xs-12 col-md-5">
                        <h3>Workforce Outsourcing</h3>
                        <p>Let our people do the work for you. Persons are trained, contracted and employed by us - reducing the time taken on your side to manage and grow your workforce.</p>
                        Read more about <a href="{{ URL::route('outsrc') }}">workforce outsourcing</a>
                    </div>
                    <div class="service col-xs-12 col-md-5">
                        <h3>Payroll Services</h3>
                        <p>We cover the entire payroll process so that you can focus on the things that matter most to your business.</p>
                        Read more about our <a href="{{ URL::route('pay') }}">payroll services</a>
                    </div>
                    <div class="service col-xs-12 col-md-5">
                        <h3>HR Services</h3>
                        <p>We offer a range of HR administration services that simplify your business: Health, Recruitment, Performance Management, Time & Attendance, Payroll and Benefits.</p>
                        Read more about our <a href="{{ URL::route('hrsrv') }}">human resource management services</a>
                    </div>
                    <div class="service col-xs-12 col-md-5">
                        <h3>Recruitment Services</h3>
                        <p>We assess your people needs and help you find the right people to get the job done.</p>
                        Read more about our <a href="{{ URL::route('recruite') }}">recruitment services</a>
                    </div>
                    <div class="training col-xs-12 col-md-5">
                        <h3>Training</h3>
                        <p>We offer training courses to provide your workforce with the skills needed to drive performance, and maintain high levels of professionalism.</p>
                        <ul>
                            <li>Project Management</li>
                            <li>Customer Service</li>
                            <li>Supervisory Management</li
                            <li>Sales</li>
                        </ul>
                        <p>Read more about our <a href="{{ URL::route('trnng') }}">training courses</a></p>
                    </div>

                    <div class="service col-xs-12 col-md-5">
                        <h3>Consultancy</h3>
                        <p>Whether you need project management, business process review or project manager outsourcing we can help you.</p>
                        Read more about our <a href="{{ URL::route('consult') }}">consultancy services</a>
                    </div>


                    </div> <!-- end: .row -->
                </div>
            @include('pages.contentSidebar')
                </div> <!-- end: main -->
            </div> <!-- end: container -->
             @include('pages.contentFooter')
       

@stop