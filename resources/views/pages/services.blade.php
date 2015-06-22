{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
	 <body class="jobs">

    @include('pages.headers.jobsHeader')
          <div id="foyer">
                    <div class="jobs-search-form col-xs-12 col-md-8 col-md-offset-2">
                        
                    <form method="GET" action="{{ URL::route('search') }}" accept-charset="UTF-8" class="form-horizontal"> 
                               <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-xs-6">
                                    <input class="form-control" placeholder="" name="title" type="text">                          
                                      <p class="help-block">Search by job title</p>
                                </div>
                                <div class="col-xs-4">
                                    <input class="form-control" name="location" type="text">                           
                                     <p class="help-block">Search by location</p>
                                </div>
                                <div class="col-xs-2">
                                    <input type="submit" value="Search" class="btn btn-block btn-default" />
                                </div>
                            </div>
                        </div>
                    </div>
                    </form> {{--end of the form   --}}   
                  
                            </div>


                </div>


                <div class="container">
                    <div id="main">
                      <!--   <div class="row">
                            <div class="col-xs-12 col-md-8 col-md-offset-2"> -->
         
                <section>
                    <ul id="listings">
                            @foreach ($results->getCollection()->all()  as $jobSearch)

                                <li><a data-toggle="modal" data-target="#myModal" href="" onclick="mod('{{ $jobSearch->title}}','{{ $jobSearch->location}}', '{{ $jobSearch->description}}')">{{ $jobSearch->title }}</a></li>
                                @include('pages.modal')
                            <!-- <li><a href="#">Junior Accountant</a></li>
                            <li><a href="#">Trading Intern at NCB Ltd.</a></li>
                            <li><a href="#">Production Manager</a></li> -->
           
                            @endforeach
                             

                        </ul>
                         
                         
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
                            <?php echo $results->render(); ?>
                        </section>
                            </div>
                                
                           <!--  <div id="contextmenu" class="context-menu col-xs-12 col-md-3">
                            </div> -->
                      <!--   </div> <!-- end: .row -->

                        </div> <!-- end: main -->

                    </div> <!-- end: container -->


                    <div id="dialog" class="modal fade in">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <p style="text-align: center; margin-top: 2em;">
                                <img src="assets/img/loading.gif" alt="Please wait. Loading..." />
                                <br />
                                Please wait a moment. Loading...
                                </p>
                            </div>
                        </div>
                    </div>
    </br>
    </br></br></br>
    @include('pages.contentFooter')

                 <!-- scripts -->
                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="assets/js/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="assets/js/bootstrap.min.js"></script>
                <script type="text/javascript">
                        $(function() {
                            $(document).on('hidden.bs.modal', '#dialog', function (event) {
                                $(this).removeData('bs.modal');
                                $(this).find('.modal-content').html('<p style="text-align: center; margin-top: 2em;">' +
                                    '<img src="/assets/img/loading.gif" alt="Please wait. Loading..." />' +
                                    '<br /        >Please wait a moment. Loading...</p>');
                            });
                        });
                </script>   

@stop