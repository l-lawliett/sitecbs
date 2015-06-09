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
                        <h1>Customized Project Management</h1>
                        <div class="row-divider col-xs-12"></div>

                        <h3>For Organizations Embarking on High-Impact Projects</h3>
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td width="358"><strong>Target Group</strong></td>
                                    <td width="267"><strong>Areas covered</strong></td>
                                    <td width="95"><strong>Duration</strong></td>
                                </tr>
                                <tr>
                                    <td width="358">Executive or Senior Management teams with responsibility for planning and driving the organization's change&nbsp; process.</td>
                                    <td width="267">
                                        <ul>
                                            <li>Introduction to Project Management</li>
                                            <li>Executive Guide to Project Management</li>
                                        </ul>
                                    </td>
                                    <td width="95">4-6 hours &nbsp; &nbsp; &nbsp; &nbsp; 4-6 hours</td>
                                </tr>
                                <tr>
                                    <td width="358">Managers, Project Managers or team leaders with responsibility for planning projects, managing projects or operating as team leads on projects.</td>
                                    <td width="267">
                                        <ul>
                                            <li>Principles and Techniques of Project Management</li>
                                            <li>Planning with MS Projects</li>
                                        </ul>
                                    </td>
                                    <td width="95">4&nbsp; days<p></p>
                                        <p>1.5 - 2 days</p></td>
                                </tr>
                                <tr>
                                    <td width="358">Project team members involved in projects</td>
                                    <td width="267">
                                        <ul>
                                            <li>Principles and Techniques of Project Management</li>
                                            <li>Project Tracking and Reporting<a href="#_ftn1"><sup>[1]</sup></a></li>
                                        </ul>
                                    </td>
                                    <td width="95">3 - 3.5 days<p></p>
                                        <p>1-1.5 days</p></td>
                                </tr>
                                <tr>
                                    <td width="358">Line Mangers who need to do in-house/in-department Projects</td>
                                    <td width="267">Project Management for operational Managers</td>
                                    <td width="95">2 Days</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>

		    @include('pages.contentSidebar')
                </div> <!-- end: main -->
                </div> <!-- end: container -->

		 @include('pages.contentFooter')


@stop