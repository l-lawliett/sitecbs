{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
	 <body class="training">
		 @include('pages.contentHeader')
	
		<div id="foyer">
        </div>
        
        <div class="container">
            <div class="clearfix" id="main">
                    <div class="col-xs-12 col-md-9 pull-right">
                         <h1>Training</h1>
                        <div class="row-divider col-xs-12"></div>


                        <p>Training is the best way to ensure that your employees&nbsp;acquire up-to-date knowledge and skills to maintain optimal performance levels in the workplace. &nbsp;In order to develop&nbsp;a competent and efficient workforce, it is important to implement strategies which foster on-going training geared at bringing out the best in people. CBS' mission is to make organizations efficient and profitable has resulted in us engaging in a combination of training courses geared toward&nbsp;the achievement of an organization's&nbsp;strategic plans.</p>
                        <p>To meet the ongoing requirements for improved human capital in the organization, CBS has developed a training portfolio which is specifically designed to facilitate this for our growing clientele.</p>
                        <p>We offer training in a number of areas of:</p>
                        <ul>
                            <li><a title="Project Management Training" href="{{ URL::route('pgmnt') }}">Project Management</a></li>
                            <li><a title="Customer Service Training" href="{{ URL::route('cus') }}">Customer Service</a></li>
                        </ul>

                    </div>

		    @include('pages.contentSidebar')
                </div> <!-- end: main -->
                </div> <!-- end: container -->

		 @include('pages.contentFooter')


@stop