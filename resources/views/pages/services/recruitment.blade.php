{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
	 <body class="services">
		 @include('pages.contentHeader')
			 <div id="foyer">
        </div>
        <div class="container">
            <div class="clearfix" id="main">
                    <div class="col-xs-12 col-md-9 pull-right">
                        <h1>Recruitment Services</h1>
                        <div class="row-divider col-xs-12"></div>

                            <h2>Overview</h2>
                            <p>CBS offers recruitment services that ultimately ensure that the right persons are doing the right jobs within the organizations they are placed. Our strategy is based on our firm belief that there is no wrong person, that all are born with a natural talent and people are most effective when they can utilize their strengths to do work they enjoy. With this in mind, our recruitment processes seek to match the right person to each job, taking into consideration the recruiting organization's need and culture.</p>
                            <h2>What We Do</h2>
                            <p>We conduct the complete recruitment process:</p>
                            <ul>
                            <li>Advertise the post (free on CBS website and email database)</li>
                            <li>Shortlist candidates</li>
                            <li>Prepare interview questions</li>
                            <li>Set up and conduct interviews</li>
                            <li>Assess candidates</li>
                            <li>Conduct background checks</li>
                            <li>Verify credentials</li>
                            </ul>
                            <h2>How We Do It</h2>
                            <ul>
                            <li>We take a strategic approach to recruitment; aligning and matching the right candidate to the client and the client to the right candidate.</li>
                            <li>We conduct psychometric tests to ensure that candidates are not only competent, but also that they will quickly adapt to the culture of the recruiting organization.</li>
                            <li>We filter applicants based on the client's clear performance expectations and not just by the generic list of activities they are to perform.</li>
                            <li>We screen out unsuitable applicants quickly, at an early stage, facilitating short-listing of the best candidates to be interviewed; reducing the number of people the client interviews, which results in huge time and cost-saving.</li>
                            </ul>
                            <h2>Why Us</h2>
                            <p>Using the CBS recruitment formula reduces employee turnover, increases productivity, decreases average or poor performers and sets clients on a path to ultimately hiring the right candidate. In short, we save companies time and money so that they can focus on their core business. .</p>


                    </div>


		    @include('pages.contentSidebar')
                </div> <!-- end: main -->
                </div> <!-- end: container -->

		 @include('pages.contentFooter')


@stop