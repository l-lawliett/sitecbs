{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
<body class="services">
    @include('pages.headers.aboutHeader')
                        <div id="foyer">
                        </div>
                        <div class="container">
                            <div id="main" class="clearfix">
                                <div class="col-xs-12 col-md-9 pull-right">

                                    <h2>CBS at a Glance</h2>

                                    <p>Choice Business Solutions (CBS) is a Caribbean-based company specializing in providing Workforce Management Services. We service small, medium and large businesses; delivering Payroll and Benefits Administration, HR Administration, Workforce Consulting, Project Management and Business Analysis Outsourcing services. We believe that people are the centre of organizations. Our vision is to increase the success of organizations worldwide by providing a workforce with the right people at the right place at the right time.</p>
                                    <p>We aim to achieve this by providing a customized, diverse, talented, competent, qualified and efficient workforce through ongoing management and a supportive environment thereby making organizations more efficient and profitable.</p>

                                    <h1>Our Team</h1>
                                    <div id="va-accordion" class="va-container">
                                        <div class="va-nav">
                                            <span class="va-nav-prev">Previous</span>
                                            <span class="va-nav-next">Next</span>
                                        </div>
                                        <div class="va-wrapper">
                                            <div class="va-slice va-slice-1">
                                                <h3 class="va-title">Janet Smythe-Currie</h3>
                                                <div class="va-content">
                                                    <p>Chief Executive Officer</p>
                                                </div>
                                            </div>
                                            <div class="va-slice va-slice-2">
                                                <h3 class="va-title">Calvin Malcolm</h3>
                                                <div class="va-content">
                                                    <p>General Manager Operations</p>
                                                    Calvin studied Management Information systems at Florida Atlantic University. He worked in the telecomm industry before joining CBS.
                                                </div>
                                            </div>
                                            <div class="va-slice va-slice-3">
                                                <h3 class="va-title">Kereen Johnson</h3>
                                                <div class="va-content">
                                                    <p>General Manager HR and Benefits</p>
                                                    Kereen is our resident specialist in HR, Payroll and Benefits. She studied Business Economics and Social Statistics; and loves finding new ways of doing things.
                                                </div>
                                            </div>
                                            <div class="va-slice va-slice-4">
                                                <h3 class="va-title">Melissa Newell</h3>
                                                <div class="va-content">
                                                    <p>Payroll Officer</p>
                                                    Melissa has years of experience working in the field of Benefits Administration. She studied Human Resource,Finance and Banking at Utech. She has a passion for learning.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h2>Our Values</h2>
                                    <h4>Bringing Out the Best in People</h4>
                                    <p>We facilitate and support the growth and development of all our people</p>
                                    <h4>Respect for Our Customers: Both Internal and External</h4>
                                    <p>We are focused on exceeding our customer expectations, anticipating their needs and showing appreciation to all members of the CBS family.</p>
                                    <h4>Commitment to Success</h4>
                                    <p>We are committed to finding new, innovative and feasible ways to improve our services and passing on the efficiencies to our customers and associates</p>
                                    <h4>Aspiring for Excellence</h4>
                                    <p>We show a commitment to continuous improvement, standing for quality in everything we do.</p>
                                    <h4>Love for Others and Ourselves</h4>
                                    <p>Teamwork is at the core of our business and we uphold that spirit in achieving organisational and individual goals.</p>
                                    <p><iframe width="600" height="400" src="http://www.youtube.com/embed/FMMacbakdUw" frameborder="0" allowfullscreen="true"></iframe></p>
                                    <h2>Why CBS?</h2>
                                    <h4>Competent and Experienced Leadership Team</h4>
                                    <p>Our leadership team has over thirty years combined experience in project management, production management</p>
                                    <h4>Qualified Workforce</h4>
                                    <p>Each CBS contractor goes through a rigorous recruitment process including psychometric testing to ensure that they are matched with the right job.</p>
                                    <h4>Satisfied Customers</h4>
                                    <p>CBS has partnered with national and international companies to deliver exceptional service. Some of our clients include Whirlpool, Jamaica Money Market Brokers Limited, Mayberry Investments, and Victoria Mutual</p>

                                </div>
                                <div id="contextmenu" class="context-menu col-xs-12 col-md-3">
                                    <h3>Our Services</h3>
                <ul>
                    <li class=""><a class="" href="services.html"><span>Overview</span></a></li>    <li class=""><a class="" href="services/workforce-outsourcing.html"><span>Workforce Outsourcing</span></a></li>    <li class=""><a class="" href="services/payroll.html"><span>Payroll</span></a></li>    <li class=""><a class="" href="services/hr.html"><span>HR Services</span></a></li>    <li class="has-sub "><a class="" href="services/training.html"><span>Training</span></a>
                        <ul>
                            <li class=""><a class="" href="courses/project-management.html"><span>Project Management Overview</span></a></li>            <li class=""><a class="" href="courses/in-house-project-management-training.html"><span>On-site Project Management</span></a></li>            <li class=""><a class="" href="courses/operational-project-management.html"><span>Operational Project Management</span></a></li>            <li class=""><a class="" href="courses/fast-track-project-management.html"><span>Fast Track Project Management</span></a></li>            <li class=""><a class="" href="courses/customer-service.html"><span>Customer Service</span></a></li>        </ul>
                    </li>
                    <li class=""><a class="" href="services/recruitment.html"><span>Recruitment</span></a></li>    <li class=""><a class="" href="services/consult.html"><span>Consultancy</span></a></li></ul>
                                </div>
                            </div> <!-- end: main -->

                        </div> <!-- end: container -->
   @include('pages.contentFooter')
    @include('scripts.slideScript')        
@stop