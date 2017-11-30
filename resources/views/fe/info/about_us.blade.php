@section('fe_maincontent')
    <div class="j-menu-container"></div>

    @foreach($header_image as $v)
        @if($v->status == 0)
            <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
            @else
                <div class="b-inner-page-header f-inner-page-header" style="background: url({{ asset('ap/images/header_image/'.$v->header_image_url) }}) no-repeat center;
                            background-size: cover;">
            @endif
        @endforeach
        <div class="b-inner-page-header__content">
            <div class="container">
                <div class="pull-left">
                    <h1 class="f-primary-l c-default"><i class="fa fa-users"> About us</i></h1>
                    <div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa"> We are form FiNFOBD, known us</i></div>
                </div>

                @if(Session::get('fe_error_msg') != NULL)
                    <div class="col-xs-12 col-md-6 m-l-5 alert alert-danger" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_error_msg')}} {{Session::put('fe_error_msg', '')}}
                    </div>
                @endif

                @if(Session::get('fe_msg') != NULL)
                    <div class="col-xs-12 col-md-6 m-l-5 alert alert-success" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_msg')}} {{Session::put('fe_msg', '')}}
                    </div>
                @endif

                <div class="pull-right">
                    <div class="t-a-c">
                        <i class="fa f-s-25 m-b-10">Hotline</i><br>
                        <a href="#" class="btn btn-danger"><i class="fa f-s-20 c-red- m-b-5">01846 177 831</i></a><br>
                        {{--<i class="fa f-s-14">info@finFObd.com</i>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><span>About us</span></li>

                </ul>
            </div>
        </div>
        <section class="b-infoblock">
            <div class="container">
                <h2 class="f-primary-b f-center"><i class="fa">Meet our team work</i></h2>
                <p class="f-center c-s-62 f-title-small">
                    Ralit Soft is a information technology base company in bangladesh.
                    It's provide management software like as housing society management system.
                </p>
                <div class="b-shortcode-example">
                    <div class="b-employee-container row">

                        @php $number = 0; @endphp
                        @foreach($data_view as $v)

                        <div class="col-md-3 col-sm-4 col-xs-12 m-t-30">
                            <div class="b-employee-item b-employee-item--color f-employee-item">
                                <div class=" view view-sixth">
                                    <a href="#" title="{{$v->about_name}}"><img class="j-data-element" data-animate="fadeInDown" data-retina src="{{ asset('ap/images/about_img/'.$v->about_image) }}" height="230" style="padding: 5px;" alt=""/></a>
                                </div>
                                <p class="text-success m-t-10" style="color: green;">
                                    <i class="fa" style="font-size: 18px;">{{$v->about_name}}</i><br>
                                    <i class="fa" style="font-size: 16px;">{{$v->about_designation}}</i>
                                </p>

                                <div class="b-employee-item__social m-t-30">
                                    <a href="{{$v->about_twitter}}" class="b-employee-item__social_btn"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$v->about_google}}" class="b-employee-item__social_btn"><i class="fa fa-google-plus"></i></a>
                                    <a href="{{$v->about_fb}}" class="b-employee-item__social_btn"><i class="fa fa-thumbs-up"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="b-default-top-indent">
                    <div class="f-center b-remaining">
                        <div class="b-hr-with-btn">
                            <a class="b-btn b-btn--load f-btn b-btn-sm f-btn-load f-btn-sm f-primary-b"><i class="fa fa-spinner"></i> Load more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection