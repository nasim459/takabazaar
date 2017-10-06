<!DOCTYPE html>
<html ng-app="nasFeApp">
<head>
    <meta charset="utf-8">
    <title>FiNFOBD</title>
    <link rel="shortcut icon" href="{{ asset('fe/img/logo.ico') }}" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- bxslider -->
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/bxslider/jquery.bxslider.css')}}">
    <!-- End bxslider -->

    <!-- flexslider -->
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/flexslider/flexslider.css')}}">
    <!-- End flexslider -->

    <!-- bxslider -->
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/radial-progress/style.css')}}">
    <!-- End bxslider -->

    <!-- Animate css -->
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/css/animate.css')}}">
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/css/fe_style.css')}}">
    <!-- End Animate css -->

    <!-- Bootstrap css -->
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/css/bootstrap.min.css')}}">
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css')}}">
    <!-- End Bootstrap css -->

    <!-- Jquery UI css -->
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/jqueryui/jquery-ui.css')}}">
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/jqueryui/jquery-ui.structure.css')}}">
    <!-- End Jquery UI css -->

    <!-- Fancybox -->
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/fancybox/jquery.fancybox.css')}}">
    <!-- End Fancybox -->

    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/fonts/fonts.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link type="text/css" data-themecolor="default" rel='stylesheet' href="{{URL::asset('fe/css/main-default.css')}}">

    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/rs-plugin/css/settings.css')}}">
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/rs-plugin/css/settings-custom.css')}}">
    <link type="text/css" rel='stylesheet' href="{{URL::asset('fe/js/rs-plugin/videojs/video-js.css')}}">
</head>
<body>
<header>
    <div class="b-top-options-panel">
        <div class="container">
            <div class="b-option-contacts f-option-contacts">
                <a href="https://mail.google.com" target="_blank"><i class="fa fa-envelope-o"></i> info@finfobd.com</a>
                <a href="#"><i class="fa fa-phone"></i> 01846 177 831 </a>
                <a href="#"><i class="fa fa-skype"></i> finfobd</a>
            </div>

            <div class="b-option-total-cart">
                <div class="b-option-total-cart__goods" style="margin-top: 15px">
                    @if(!isset(Auth::user()->email))
                        <a href="#" class=""><i class="fa fa-sign-in"></i> Sign In</a>
                    @endif

                    <div class="b-option-cart__items">
                        {!! Form::open(array('url'=>'/postSignIn-for-user', 'role'=>'form', 'method'=>'POST')) !!}
                        <div class="m-t-10">
                            <i class="fa text-success m-t-5 m-b-20">Choose your opiton</i><br>

                            <a href="#" data-toggle="modal" data-target="#signIn" class="btn btn-success btn-sm" style="width: 100px;">Sing In</a>
                            <a href="#" data-toggle="modal" data-target="#signUp" class="btn btn-default btn-sm pull-right" style="width: 100px;">Sign Up</a>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>

            <div class="b-option-contacts f-option-contacts" style="float: right!important;">
                <a href="#" data-toggle="modal" data-target="#subScribe"><i class="fa fa-send-o"></i> Subscribe</a>
                @if(isset(Auth::user()->email))
                    <a href="{{ url('blog-user-profile') }}"><i class="fa fa-user"></i> Your Profile</a>
                    <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Sign Out</a>
                @endif
            </div>

            <!--start category -->
            <div id="signUp" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!--start Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-success text-center">
                                Registration Here
                            </h4>
                        </div>
                        <div class="modal-body" style="overflow: hidden">
                            <div class="col-md-12">
                                <div class="col-md-12 f-s-14 f-f-s">

                                    {!! Form::open(array('url'=>'blog-user-insert', 'role'=>'form', 'method'=>'POST')) !!}
                                    <div class="form-horizontal m-t-10">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="insert_save" value="insert_save">

                                        <div class="form-group">
                                            <label class="col-sm-4 m-t-8 text-right" for="username">Full Name :</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="name" class="form-control" id="username" placeholder="Enter name...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 m-t-8 text-right" for="email">Email Address :</label>
                                            <div class="col-sm-6">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="example@ralitsoft.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 m-t-8 text-right" for="password">Password :</label>
                                            <div class="col-sm-6">
                                                <input type="password" name="pass" class="form-control" id="username" placeholder="Write password">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-sm-4" for="email"></label>
                                            <div class="col-sm-6 m-t-15">
                                                <button type="submit" class="btn btn-success col-sm-12">Sign Up</button>
                                            </div>
                                        </div>

                                    </div>
                                    {!! Form::close() !!}

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--end Modal content-->

                </div>
            </div>
            <!--end detailsInfo -->

            <!--start category -->
            <div id="signIn" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!--start Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-success text-center">
                                Sign In
                            </h4>
                        </div>
                        <div class="modal-body" style="overflow: hidden">
                            <div class="col-md-12">
                                <div class="col-md-12 f-s-14 f-f-s">

                                    {!! Form::open(array('url'=>'/postSignIn-for-user', 'role'=>'form', 'method'=>'POST')) !!}
                                    <div class="m-t-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"> &nbsp; &nbsp; &nbsp; &nbsp; Email :</span>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Username" required>
                                        </div>
                                        <br>

                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">Password :</span>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Write password" required>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-success" style="width: 200px;">Login</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--end Modal content-->

                </div>
            </div>
            <!--end detailsInfo -->

            <!--start subscribe-->
            <div id="subScribe" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!--start Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-success text-center">
                                Subscribe Here
                            </h4>
                        </div>
                        <div class="modal-body" style="overflow: hidden">
                            <div class="col-md-12">
                                <div class="col-md-12 f-s-14 f-f-s m-t-10 m-b-10">

                                    {!! Form::open(array('url'=>'subscriber-insert', 'role'=>'form', 'method'=>'POST')) !!}
                                    <div class="">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">@</span>
                                                <input type="email" name="sub_email" class="form-control col-sm-6" placeholder="Enter eamil address" required  aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <button type="submit" class="btn btn-success">Subscribe Me</button>
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--end Modal content-->

                </div>
            </div>
            <!--end subscribe-->
        </div>
    </div>
    <div class="container b-header__box b-relative">
        <a href="{{ url('/') }}" class="b-left b-logo" title="FinFObd"><img class="color-theme" data-retina src="{{asset('fe/img/logo_header.png')}}" alt="Logo" width="150px"/></a>
        <div class="b-header-r b-right">
            <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
            <nav class="b-top-nav f-top-nav b-right j-top-nav">
                <ul class="b-top-nav__1level_wrap">
                    <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b b-top-nav-big"><a href="{{ url('/') }}" class="fa"><i class="fa fa-home b-menu-1level-ico"></i><b>Home</b> <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a></li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                        <a href="{{ url('loan') }}" class="fa"><i class="fa fa-folder-open b-menu-1level-ico"></i><b>Loan</b><span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                        <div class="b-top-nav__dropdomn">
                            <ul class="b-top-nav__2level_wrap">
                                <li class="b-top-nav__2level_title f-top-nav__2level_title">Loan</li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('loan-home') }}"><i class="fa fa-angle-right"></i>Home Loan</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('loan-car') }}"><i class="fa fa-angle-right"></i>Car Loan</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('loan-personal') }}"><i class="fa fa-angle-right"></i>Personal Loan</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('loan-sme') }}"><i class="fa fa-angle-right"></i>SME Loan</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('loan-working-capital') }}"><i class="fa fa-angle-right"></i>Working Capital Loan</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('loan-others') }}"><i class="fa fa-angle-right"></i>Others Loan</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                        <a href="{{ url('investment') }}" class="fa"><i class="fa fa-picture-o b-menu-1level-ico"></i><b>Investment</b> <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                        <div class="b-top-nav__dropdomn">
                            <ul class="b-top-nav__2level_wrap">
                                <li class="b-top-nav__2level_title f-top-nav__2level_title">Investment</li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('investment-saving') }}"><i class="fa fa-angle-right"></i>Saving Accounts</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('investment-fixed') }}"><i class="fa fa-angle-right"></i>Fixed Accounts</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('investment-mutual') }}"><i class="fa fa-angle-right"></i>Mutual Accounts</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                        <a href="{{ url('insurance') }}" class="fa"><i class="fa fa-code b-menu-1level-ico"></i><b>Insurance</b> <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                        <div class="b-top-nav__dropdomn">
                            <ul class="b-top-nav__2level_wrap">
                                <li class="b-top-nav__2level_title f-top-nav__2level_title">Insurance</li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('insurance-life') }}"><i class="fa fa-angle-right"></i>Life Insurance</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary b-top-nav__with-multi-lvl"><a onclick="return false" href=""><i class="fa fa-angle-right"></i>Motor Insurance</a>
                                    <ul class="b-top-nav__multi-lvl-box">
                                        <li class="b-top-nav__multi-lvl"><a href="{{ url('insurance-motor-bike') }}"><i class="fa fa-angle-right"></i>Bike Insurance</a></li>
                                        <li class="b-top-nav__multi-lvl"><a href="{{ url('insurance-motor-car') }}"><i class="fa fa-angle-right"></i>Car Insurance</a></li>
                                    </ul>
                                </li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('insurance-marine') }}"><i class="fa fa-angle-right"></i>Marine Insurance</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('insurance-fire') }}"><i class="fa fa-angle-right"></i>Fire Insurance</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('insurance-accident') }}"><i class="fa fa-angle-right"></i>Accident Insurance</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                        <a href="{{ url('card') }}" class="fa"><i class="fa fa-picture-o b-menu-1level-ico"></i><b>Card</b> <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                        <div class="b-top-nav__dropdomn">
                            <ul class="b-top-nav__2level_wrap">
                                <li class="b-top-nav__2level_title f-top-nav__2level_title">Card</li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('card-credit') }}"><i class="fa fa-angle-right"></i>Credit Card</a></li>
                                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('card-debit') }}"><i class="fa fa-angle-right"></i>Debit Card</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                        <a href="{{ url('blog') }}" class="fa"><i class="fa fa-picture-o b-menu-1level-ico"></i><b>Blog</b> <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                        {{--<div class="b-top-nav__dropdomn">--}}
                            {{--<ul class="b-top-nav__2level_wrap">--}}
                                {{--<li class="b-top-nav__2level_title f-top-nav__2level_title">Blog</li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="{{ url('blog') }}"><i class="fa fa-angle-right"></i>Blog View</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    </li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                        <a href="{{ url('about-us') }}" class="fa"><i class="fa fa-list b-menu-1level-ico"></i><b>About Us</b> <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                        {{--<div class="b-top-nav__dropdomn">--}}
                            {{--<ul class="b-top-nav__2level_wrap">--}}
                                {{--<li class="b-top-nav__2level_title f-top-nav__2level_title">Shopping</li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="shop_listing_col.html"><i class="fa fa-angle-right"></i>Shop List Column</a></li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="shop_listing_row.html"><i class="fa fa-angle-right"></i>Shop List Row</a></li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="shop_listing_col_full_width.html"><i class="fa fa-angle-right"></i>Shop List Full width v1</a></li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="shop_listing_col_full_width_v2.html"><i class="fa fa-angle-right"></i>Shop List Full width v2</a></li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="shop_detail.html"><i class="fa fa-angle-right"></i>Single Product</a></li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="shop_cart.html"><i class="fa fa-angle-right"></i>Shopping cart</a></li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="shop_check_out.html"><i class="fa fa-angle-right"></i>Check out page</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    </li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                        <a href="{{ url('contact-us') }}" class="fa"><i class="fa fa-folder-open b-menu-1level-ico"></i><b>Contact Us</b><span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                        {{--<div class="b-top-nav__dropdomn">--}}
                            {{--<ul class="b-top-nav__2level_wrap">--}}
                                {{--<li class="b-top-nav__2level_title f-top-nav__2level_title">Contact us</li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="contact_us.html"><i class="fa fa-angle-right"></i>Version1</a></li>--}}
                                {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="contact_us_v2.html"><i class="fa fa-angle-right"></i>Version2</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</header>
<div class="j-menu-container"></div>
<div class="l-main-container">
    @yield('fe_maincontent')
</div>

@include('fe.include_fe_footer')


{{--start modal_popup_loadin_after_5_secounds--}}

<div>
    <div id="popup" title="page load modal popup" style="display: none;">
        <b>Today News:</b><br>
        Currently launched windows 10 professional version
    </div>
</div>

{{--end modal_popup_loadin_after_5_secounds--}}

<script>
    $(function () {
        $(document).ready(function () {

            $('#popup').dialog({
                title: "JQuery popup tutorila",
                width: 450,
                height: 250,
                modal: true,
                button: {
                    close: function () {
                        $(this).dialog('close');
                    }
                }
            });

        });

    });


</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/59d66089c28eca75e462450b/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script src="{{URL::asset('ap/ckeditor/ckeditor.js')}}"></script>
<script src="{{URL::asset('fe/angular/js/angular.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>
<script src="{{URL::asset('fe/angular/js/fe_loanController.js')}}"></script>
{{--<script src="{{URL::asset('fe/angular/js/homeController.js')}}"></script>--}}
{{--<script src="{{URL::asset('fe/angular/js/RegiController.js')}}"></script>--}}
<script src="{{URL::asset('fe/angular/js/roughController.js')}}"></script>
<script src="{{URL::asset('fe/angular/js/loan/LoanController.js')}}"></script>

<script src="{{URL::asset('fe/js/breakpoints.js')}}"></script>
<script src="{{URL::asset('fe/js/jquery/jquery-1.11.1.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{URL::asset('fe/js/scrollspy.js')}}"></script>
<script src="{{URL::asset('fe/js/bootstrap-progressbar/bootstrap-progressbar.js')}}"></script>
<script src="{{URL::asset('fe/js/bootstrap.min.js')}}"></script>
<!-- end bootstrap -->
<script src="{{URL::asset('fe/js/masonry.pkgd.min.js')}}"></script>
<script src='{{URL::asset('fe/js/imagesloaded.pkgd.min.js')}}'></script>
<!-- bxslider -->
<script src="{{URL::asset('fe/js/bxslider/jquery.bxslider.min.js')}}"></script>
<!-- end bxslider -->
<!-- flexslider -->
<script src="{{URL::asset('fe/js/flexslider/jquery.flexslider.js')}}"></script>
<!-- end flexslider -->
<!-- smooth-scroll -->
<script src="{{URL::asset('fe/js/smooth-scroll/SmoothScroll.js')}}"></script>
<!-- end smooth-scroll -->
<!-- carousel -->
<script src="{{URL::asset('fe/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
<!-- end carousel -->
<script src="{{URL::asset('fe/js/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{URL::asset('fe/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{URL::asset('fe/js/rs-plugin/videojs/video.js')}}"></script>

<!-- jquery ui -->
<script src="{{URL::asset('fe/js/jqueryui/jquery-ui.js')}}"></script>
<!-- end jquery ui -->
<script type="text/javascript" language="javascript"
        src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>
<!-- Modules -->
<script src="{{URL::asset('fe/js/modules/sliders.js')}}"></script>
<script src="{{URL::asset('fe/js/modules/ui.js')}}"></script>
<script src="{{URL::asset('fe/js/modules/retina.js')}}"></script>
<script src="{{URL::asset('fe/js/modules/animate-numbers.js')}}"></script>
<script src="{{URL::asset('fe/js/modules/parallax-effect.js')}}"></script>
<script src="{{URL::asset('fe/js/modules/settings.js')}}"></script>
<script src="{{URL::asset('fe/js/modules/maps-google.js')}}"></script>
<script src="{{URL::asset('fe/js/modules/color-themes.js')}}"></script>
<!-- End Modules -->

<!-- Audio player -->
<script type="text/javascript" src="{{URL::asset('fe/js/audioplayer/js/jquery.jplayer.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('fe/js/audioplayer/js/jplayer.playlist.min.js')}}"></script>
<script src="{{URL::asset('fe/js/audioplayer.js')}}"></script>
<!-- end Audio player -->

<!-- radial Progress -->
<script src="{{URL::asset('fe/js/radial-progress/jquery.easing.1.3.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
<script src="{{URL::asset('fe/js/radial-progress/radialProgress.js')}}"></script>
<script src="{{URL::asset('fe/js/progressbars.js')}}"></script>
<!-- end Progress -->

<!-- Google services -->
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script src="{{URL::asset('fe/js/google-chart.js')}}"></script>
<!-- end Google services -->
<script src="{{URL::asset('fe/js/j.placeholder.js')}}"></script>

<!-- Fancybox -->
<script src="{{URL::asset('fe/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{URL::asset('fe/js/fancybox/jquery.mousewheel.pack.js')}}"></script>
<script src="{{URL::asset('fe/js/fancybox/jquery.fancybox.custom.js')}}"></script>
<!-- End Fancybox -->
<script src="{{URL::asset('fe/js/user.js')}}"></script>
<script src="{{URL::asset('fe/js/timeline.js')}}"></script>
<script src="{{URL::asset('fe/js/fontawesome-markers.js')}}"></script>
<script src="{{URL::asset('fe/js/markerwithlabel.js')}}"></script>
<script src="{{URL::asset('fe/js/cookie.js')}}"></script>
<script src="{{URL::asset('fe/js/loader.js')}}"></script>
<script src="{{URL::asset('fe/js/scrollIt/scrollIt.min.js')}}"></script>
<script src="{{URL::asset('fe/js/modules/navigation-slide.js')}}"></script>

</body>
</html>