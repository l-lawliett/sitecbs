{{--
Author:David White
Date:5/14/2015
Company:Choices Business Solutions
--}}

@extends('master')

@section('content')
	 <body class="jobs">

      @if ($startNum == 2)
        @include('pages.headers.startHeaders.servHeader')
 @else
         @include('pages.headers.jobsHeader')

@endif
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
                        <div class="row">
                            <div class="col-xs-12 col-md-8 col-md-offset-2">

                                

                                <ul id="listings">
                                        
                                </ul>
                                
                            </div>
                            <div id="contextmenu" class="context-menu col-xs-12 col-md-3">
                            </div>
                        </div> <!-- end: .row -->
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