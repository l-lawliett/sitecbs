{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
<body class="front">


 @include('pages.startHeader')
        <div id="foyer">
            <div class="letabs tabs-style-tzoid col-xs-12 col-md-7 col-md-offset-1">
                <nav>
                <ul class="clearfix">
                    <li><a href="jobseekers" class="tab-current"><span>{{$jobcount}} new jobs available!</span></a></li>
                    <li class=""><a href="#employers" class=""><span>Employers</span></a></li>
                    
                </ul>
                </nav>
                <div class="content-wrap">
                     <section id="jobseekers" class="content-current clearfix">
                    <div class="job-listings">
                        <h3>Find your dream-job online</h3>
                        <ul>
                            
                            @foreach ($jobs->getCollection()->all()  as $job)

                            <li><a data-toggle="modal" data-target="#myModal" href="" onclick="mod('{{ $job->title}}','{{ $job->location}}', '{{ $job->description}}')">{{ $job->title }}</a></li>
                            @include('pages.modal')
                            <!-- <li><a href="#">Junior Accountant</a></li>
                            <li><a href="#">Trading Intern at NCB Ltd.</a></li>
                            <li><a href="#">Production Manager</a></li> -->
           
                            @endforeach
                             

                        </ul>
                           @include('pages.modal')
                         
                            <script type="text/javascript">
                                function mod(x,y,z){

                                var test = x;
                                var test2 = y;
                                var test3 = z;
                               // console.log(alert("JobTitle:  " + test));
                               // console.log(alert("Location:  " + test2));
                               // console.log(alert("Description:  " + test3));

                               document.getElementById("myModalLabel").innerHTML = "Job Title: " + "<b>" + test+ "</b>";
                               document.getElementById("locat").innerHTML = "Location: " + test2;
                               document.getElementById("des").innerHTML =test3;

                                }
                               
                               
                            </script>
                    </div>
                    <?php echo $jobs->render(); ?>
                    </section>
                    
                    <section id="employers" class="content clearfix ">
                        <div class="col-xs-12 col-md-7 link-scaleupbounce">
                            <h3>See how we can help you today</h3>
                            <ul class="choices">
                                <li><a href="#">Post a job on our job board</a></li>
                                <li><a href="{{ URL::route('outsrc') }}">Outsource your workload to our specialists</a></li>
                                <li><a href="{{ URL::route('consult') }}">Hire our consultants to review your business</a></li>
                                <li><a href="{{ URL::route('trnng') }}">Get training for your staff</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        </div>
                    </section>


                   


                </div><!-- /content-wrap -->
            </div><!-- /letabs -->
        </div> <!-- foyer -->
        <div class="container">
            <div id="main">
                <div id="welcome">
                    <h1>We are a Caribbean-based agency specializing in workforce management services</h1>
                </div>

                <div class="row-divider col-xs-12"></div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 col-md-3">
                            <h2 class="flushtop">Our Services</h2>
                            <p>We let you focus on your core business.</p>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <h4>Workforce Management</h3>
                            <p>We recruit and train staff to meet the needs of your organization.</p>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <h4>HR Services</h3>
                            <p>Focus on your core business and let us administer employee benefits for your staff.</p>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <h4>Payroll</h3>
                            <p>Tailored payroll solutions enhance your employee benefit offerings while reducing time and cost.</p>
                        </div>
                    </div>
                </div> <!-- end: .row -->

                <div class="row-divider col-xs-12"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-xs-12 col-md-3">
                            <h2 class="flushtop">Our Clients</h2>
                            <p>We have partnered with local and international businesses to meet their talent and administrative needs.</p>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <h4>Jamaica Beverages</h4>
                            <img src="assets/img/jabev.jpg" alt="Jamaica Beverages" />
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <h4>Panasonic</h4>
                            <img src="assets/img/panasonic.png" alt="Panasonic" />
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <h4>JMMB Group</h4>
                            <img src="assets/img/jmmb.jpg" alt="JMMB" />
                        </div>
                    </div>
                </div> <!-- end: .row -->
            </div> <!-- end: main -->
        </div> <!-- end: container -->
       @include('pages.contentFooter')
    
       @include('scripts.tabScripts')

@stop

