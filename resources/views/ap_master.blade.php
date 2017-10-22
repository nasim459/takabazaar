<!DOCTYPE html>
<html lang="en" ng-app="nasAdminApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>FiNFOBD</title>
        <link rel="shortcut icon" href="{{ asset('fe/img/logo.ico') }}" type="image/x-icon">

        <!-- Bootstrap -->
        <link href="{{URL::asset('ap/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- App -->
        <link href="{{URL::asset('ap/app/app.css')}}" rel="stylesheet">
        <link href="{{URL::asset('ap/app/app_style.css')}}" rel="stylesheet">
        <!-- Plugins table -->
        <link href="{{URL::asset('ap/plugins/table/table.css')}}" rel="stylesheet">
        <!-- Plugins font-awesome -->
        <link href="{{URL::asset('ap/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    </head>
    <body>
        <!--start container-fluid-->
        <div class="container-fluid main-content well-d">

            <!--start row-1-->
            <div class="row">
                <div class="p-15" style="padding: 5px; background-color: #fff;">
                    <!--start button-group left-->
                    <div class="btn-group pull-left">
                        <a href="{{URL::to('dboard')}}"><i class="fa fa-home logo-name"> FiNFOBD</i></a>
                    </div>
                    <!--end button-group left-->

                    <!--start button-group right-->
                    <div class="btn-group pull-right m-r-20">
                        {{--<a href="" class="m-r-20" title="Notification For Applying">--}}
                            {{--<i class="fa fa-bell">--}}
                                {{--<sup class="text-danger-light f-s-14">--}}
                                    {{--<b>0{{Session::get('count_alert')}} {{Session::put('count_alert', '')}}</b>--}}
                                {{--</sup>--}}
                            {{--</i>--}}
                        {{--</a>--}}
                        <a href="{{URL::to('')}}" target="_blank" class="m-r-20" title="Visite finFoBD.com Webiste">
                            <i class="fa fa-hand-o-right"></i>
                        </a>
                        <a href="{{URL::to('dboard')}}" class="dropdown-toggle logo-name" title="{{Auth::user()->name}}"><i class="fa">{{Auth::user()->name}}</i>
                            @if(isset(Auth::user()->user_image))
                                <img class="img-h-w" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="pic">
                            @else
                                <img class="img-h-w" src="{{URL::asset('ap/images/img_blank.jpg')}}" alt="pic">
                            @endif
                        </a>
                        &nbsp; &nbsp;
                        <a href="{{route('logout')}}" title="Click to SignOut"><i class="fa fa-power-off logo-name text-default-light"></i></a>
                    </div>
                    <!--end button-group right-->
                    <nav class=""><div class="container-fluid"></div></nav>
                </div>
            </div>
            <!--end row-1-->

            <!--start row-2-->
            <div class="row mainscreen" style="border-top: 1px solid #DDDDDD;">

                <!--start col-md-2-->
                <div class="col-md-2 well-m" style="//border-right: 1px solid red; //background-color: #F8F8F8; //height: 530px">

                    <nav class="navbar">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle</span>
                                    <span class="btn-success icon-bar"></span>
                                    <span class="btn-success icon-bar"></span>
                                    <span class="btn-success icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="">
                                <div class="btn-group-vertical m-t-20 m-b-25" role="group" aria-label="...">

                                    <a href="{{ url('loan'.'/'.'sme') }}" class="b-r-s width-130 m-t-5 btn btn-success">
                                        <i class="fa fa-book fa-2x fa-3y"><br/><small class="f-s-18">Loan</small></i>
                                    </a>

                                    <a href="{{ url('investment'.'/'.'saving') }}" class="b-r-s width-130 m-t-5 btn btn-success basic">
                                        <i class="fa fa-leaf fa-2x fa-3y"><br/><small class="f-s-18">Investment</small></i>
                                    </a>

                                    <a href="{{ url('insurance'.'/'.'life') }}" class="b-r-s width-130 m-t-5 btn btn-success">
                                        <i class="fa fa-briefcase fa-2x fa-3y"><br/><small class="f-s-18">Insurance</small></i>
                                    </a>

                                    <a href="{{ url('card'.'/'.'credit') }}" class="b-r-s width-130 m-t-5 btn btn-success">
                                        <i class="fa fa-gift fa-2x fa-3y"><br/><small class="f-s-18">Card</small></i>
                                    </a>

                                    <a href="{{ url('blog-view') }}" class="b-r-s width-130 m-t-5 btn btn-success">
                                        <i class="fa fa-gear fa-2x fa-3y"><br/><small class="f-s-18">Blog</small></i>
                                    </a>
                                    
                                    <!--<a href="" class="b-r-s width-130 m-t-5 btn btn-success">
                                        <i class="fa fa-credit-card fa-2x fa-3y"><br/><small class="f-s-18">Payroll</small></i>
                                    </a>-->

                                    <!--<a href="{{URL::to('form')}}" class="b-r-s width-130 m-t-5 btn btn-success">
                                        <i class="fa fa-credit-card fa-2x fa-3y"><br/><small class="f-s-18">Form</small></i>
                                    </a>-->

                                </div>
                            </div><!-- /.navbar-collapse -->

                        </div><!-- /.container-fluid -->
                    </nav>

                </div>
                <!--end col-md-2-->

                <!--start col-md-10-->
                <div class="col-md-10" style="//border: 1px solid red; //height: 530px; //margin-top: 21px; margin-left: 0px">
                    @yield('maincontent')
                </div>
                <!--end col-md-10-->

            </div>
            <!--end row-2-->

        </div>
        <!--end container-fluid-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <script src="{{URL::asset('ap/bootstrap/js/jquery.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{URL::asset('ap/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Include input file for image -->
        <script src="{{URL::asset('ap/bootstrap/js/bootstrap.file-input.js')}}"></script>

        <script src="{{URL::asset('ap/ckeditor/ckeditor.js')}}"></script>
        <script src="{{URL::asset('n_angular.jsjs')}}"></script>
        <script src="{{URL::asset('ap/angular/js/homeController.js')}}"></script>
        <script src="{{URL::asset('ap/angular/js/RegiController.js')}}"></script>
        <script src="{{URL::asset('ap/angular/js/roughController.js')}}"></script>
        <script src="{{URL::asset('ap/angular/js/loan/LoanController.js')}}"></script>
        <script>
            $(document).ready(function() {
                $(window).on("load resize",function(){
                    $(".mainscreen").css("height",window.innerHeight-100);
                    $(".secondscreen").css("height",window.innerHeight-182);
                })
            });
        </script>

    </body>
</html>