{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
<body class="consult">

		 @include('pages.contentHeader')
		  <div class="" id="foyer">
        </div>
        <div class="container">
            <div class="clearfix" id="main">
                    <div class="col-xs-12 col-md-9 pull-right">


                        <h2 class="con_title">Overview</h2>
                        <div class="row-divider col-xs-12"></div>
                        <p>Ms. Janet Smythe Malcolm is an industry leader in providing consulting expertise to our valued clients. 
                          With multiple projects under her belt, Choice Business Solutions through our CEO Janet Smythe Malcolm is poised to effectively
                         support your project needs, wherever they may be.</p>
                        <p>Ms. Janet Smythe Malcolm’s proven service record of Project Management success extends 
                        worldwide for providing exceptional quality, innovative management and professional integrity in design and management of projects in:</p>



                         <ul>
                            <li>Business Process Modeling</li>
                            <li>Business Solution Analysis</li>
                            <li>Business requirement review</li>
                            <li>User Acceptance Testing (UAT)</li>
                            <li>Human Resource Analysis</li>
                            <li>HR Operational Process Improvement</li>
                            <li>HR Best Practice processes and procedures</li>
                            <li>HR Mergers and Integration</li>
                        </ul>

                        <hr>

<button class='myButton' onclick="location.href='{{ URL::route('proj') }}'">
    Click to Learn more about our projects</button>

                         <div class="row-divider col-xs-12"></div>


                        <h2 class="con_title">Project Management Consultancy</h2>
                     

                        <p>Our proven track record of successful project management speaks to the high caliber of knowledge and expertise within the CBS team. Each project, like each client, brings its own uniqueness and needs to the fore. As such, our project management consultancy services are applied across various industries with an individualistic approach.</p>
                        <h3 class="con_title">What we do</h3>
                        <p>We establish a Project Culture in organizations, ensuring the efficient execution of projects directly related to meeting organizational strategies. This includes planning and execution of high impact projects ensuring the desired results within the desired time frame, Business process review and Project Manager Outsourcing.</p>
                        <h3 class="con_title">How we do it</h3>
                        <p>At CBS, we sit with the client and take a strategic view of the project objectives and ensure that they are aligned with the overall company goals. We map the processes to identify feasibility, then determine what resources are needed and assign them accordingly. Our internal senior consultants are qualified Project Managers with extensive experience in making strategy a reality through the use of Project Management principles and practices.</p>

                        <div class="row-divider col-xs-12"></div>
                        <h2 class="con_title">HR Consultancy</h2>
                        <p>People are the most important assets within any organization; their roles and functions along with the equipment and technologies they use. At CBS where it's all about people, we ensure that the best practices and processes are being utilized by our clients.</p>
                        <h3 class="con_title">What we Do</h3>
                        <p>We provide consultancy in:</p>
                        <ul>
                            <li>Management of the Human Resources Department to ensure that employers and employees maximize the contribution of human capital to the organization</li>
                            <li>Process Improvements within the Human Resources Department that ensure efficiency and reduce cost to the organization</li>
                            <li>Best Practices in the field of Human Resources</li>
                            <li>Operational processes and procedures including documenting the desired processes and procedures in operational manuals for ease of reference, continuity and consistency in HR operation</li>
                            <li>Information Systems selection and implementation for HR division</li>
                            <li>HR restructuring</li>
                        </ul>
                        <h3 class="con_title">How we do it</h3>
                        <p>We consult with the clients, make an assessment of the needs and propose and implement best solutions. &nbsp;We help to transform your HR Function into a strategic business unit.</p>

                        <div class="row-divider col-xs-12"></div>

                        <h2 class="con_title">Business Process Consulting</h2>
                        <p>We help Businesses to do business better by providing a diverse client base and in depth operational knowledge of various business areas and practices to identify and define the processes that
                         will increase efficiency and maximize the value delivered by an organization to its stakeholders.</p>
                     
                    </div>

                    
        @include('pages.contentSidebar')
                </div> <!-- end: main -->
                </div> <!-- end: container -->

		 @include('pages.contentFooter')
                


@stop