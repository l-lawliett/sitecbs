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
                        <h1>Project Management Training</h1>
                        <div class="row-divider col-xs-12"></div>

                        <p>
                        <img  src="../assets/img/DSC_0078-e1406170279686.jpg" alt="Janet Smythe-Currie teaching" width="100%">
                        </p>
                        <p>Choice Business Solutions Limited is an affiliate of &nbsp;Corporate Education Group (CEG). Through our affiliation, we host and present several &nbsp;project management training and business analysis courses. While we offer open-courses, we also customize training to meet &nbsp;specific needs.</p>
                        <p>Our project management training courses are up-to-date and therefore aligned with the Knowledge Areas of the Project Management Institute's (PMIÂ) latest edition of <em>A Guide to Project Management Body of Knowledge</em> <em>(PMBOKÂ® Guide)</em> and are available for corporate on-site delivery.</p>
                        <h2>Our Project Management Training offers:</h2>
                        <ul>
                            <li>&nbsp;In-House Project Management Training
                            <ul>
                                <li><a title="In-house Project Management Training" href="{{ URL::route('onsite') }}">&nbsp;Customized &nbsp;training for Organizations&nbsp;embarking on high impact Projects on a regular basis</a></li>
                            </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>&nbsp;Open House&nbsp; Project Management Training for the public</li>
                        </ul>
                        <ul>
                            <ul>
                                <li><a title="Applied Project Management Certificate" href="#">Certified Applied Project Management</a></li>
                                <li><a title="Operational Project Management Course" href="{{ URL::route('opm') }}">Project management for Operational Management</a></li>
                                <li><a title="Fast Track Project Management" href="{{ URL::route('ftpm') }}">Fast Track Project Management</a></li>
                            </ul>
                        </ul>
                        <p>The Project Management Training curriculum is presented in a dual fashion; the theory of PMIÂ® is balanced by the reality of the course instructor's project management experiences. The dual approach provides the student learner with real-life examples of the theory of PMIÂ®. There are numerous discussion topics throughout, along with exercises to reinforce what participants have learned in the classroom, which translates into opportunities for incorporation of improved practices into &nbsp;current &nbsp;and future projects.</p>

                    </div>

		    @include('pages.contentSidebar')
                </div> <!-- end: main -->
                </div> <!-- end: container -->

		 @include('pages.contentFooter')


@stop