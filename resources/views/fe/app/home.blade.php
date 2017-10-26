@section('fe_maincontent')
    <div class="b-slider-primary" >
        <div class="j-slider-primary">

            @foreach($slider_image as $v)
                <div class="b-slider-primary-item- f-slider-primary-item h-234"style="background: url({{ asset('ap/images/slider_image/'.$v->slider_image_url) }}) no-repeat center; background-size: cover;">
                    <div class="container">
                        <div class="col-sm-12 col-md-12 m-t-60">
                            <div class="col-sm-12 col-md-2"></div>

                            <div class="col-sm-12 col-md-8 t-a-c">
                                <i class="fa text-danger text-center f-s-25-md-show f-s-16-sm-show m-b-10">{{ $v->slider_message }}</i>
                            </div>

                            <div class="col-sm-12 col-md-2 hotline-hide">
                                <i class="fa text-danger f-s-25 m-b-10">Hotline</i><br>
                                <a href="#" class="btn btn-danger"><i class="fa f-s-20 c-red- m-b-5">01846 177 831</i></a><br>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    {{--<div class="l-main-container" ng-controller="fe_loanController">--}}
        {{--<div class="b-breadcrumbs f-breadcrumbs">--}}
            {{--<div class="container">--}}
                {{--<ul>--}}
                    {{--<li><a href="#"><i class="fa fa-home"></i>Home</a></li>--}}
                    {{--<li><i class="fa fa-angle-right"></i><span>Home</span></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!--start section searching_offering_app-->
    @foreach($header_image as $v)
        @if($v->status == 0)
            <section class="b-desc-section-container b-diagonal-line-bg-light m-b-0">
        @else
            <section class="b-desc-section-container b-diagonal-line-bg-light m-b-0" style="background: url({{ asset('ap/images/header_image/'.$v->header_image_url) }}) no-repeat center;
                    background-size: cover;">
        @endif
    @endforeach

        <div class="container">

            @if(Session::get('fe_error_msg') != NULL)
                <h2 class="f-center f-primary-b" style="text-transform: capitalize;">
                    <i class="fa text-danger m-b-10 alert alert-danger" data-dismiss="alert">{{ Session::get('fe_error_msg') }} {{ Session::put('fe_error_msg', '') }} <span class="pull-right">&times;</span></i>
                </h2>
            @endif

            <div class="row h-234">

                <h2 class="f-center f-primary-b" style="text-transform: capitalize;margin-top: -22px;">I am searchaing for</h2>
                <div class="col-md-12 t-a-c">
                    <div class="b-infoblock-with-icon">
                        <a href="{{ url('loan') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s">
                            <i class="fa fa-home f-s-50"><br><span class="f-s-22">Loan</span></i>
                        </a>
                        <a href="{{ url('investment') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s">
                            <i class="fa fa-car f-s-50"><br><span class="f-s-22">Investment</span></i>
                        </a>
                        <a href="{{ url('insurance') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s">
                            <i class="fa fa-user f-s-50"><br><span class="f-s-22">Insurance</span></i>
                        </a>
                        <a href="{{ url('card') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s">
                            <i class="fa fa-credit-card f-s-50"><br><span class="f-s-22">Card</span></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--end section searching_offering_app-->

    <!--start section banner-->
    @if(Session::get('banner_value') != 0)
        <section class="b-bg-block f-bg-block" style="background-color: green; padding: 60px 0 60px 0;">
            <div class="container f-center">

                <div class="row h-234">
                    <div class="col-md-12 t-a-c">
                        <div class="b-infoblock-with-icon">

                            @foreach($banner_image as $v)
                                <a href="{{URL::to($v->add_link)}}" target="_blank" class="f-infoblock-with-icon__icon fade-in-animate app-banner m-t-20">
                                    <img src="{{ asset('ap/images/banner/'.$v->add_image_url) }}" class="img-thumbnail app-banner-img" alt="Picture Coming Soon">
                                    <br>
                                    <i class="fa m-t-mi-20"><br><span class="f-s-22">{{str_limit($v->add_desc, 46, '...')}}</span></i>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endif
    <!--start section banner-->

    <!--start section youtube-->
    <section class="b-desc-section-container b-diagonal-line-bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="b-infoblock-with-icon-group row">

                        @php $number = 4; @endphp
                        @foreach($video_view as $v)
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                {!! $v->v_embed_code !!}<br>
                                {{str_limit($v->v_name, 46, '...')}}
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section youtube-->

    <!--start section popular_article-->
    <section class="b-diagonal-line-bg-light b-section-info">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
                        <h2 class="f-primary-b" style="text-transform: capitalize">Popular Article Here</h2>
                        <p class="f-section-info__text_short f-primary-sb">These articles have been read a lot of time</p>
                        <div class="b-ol-list-text-container">

                            @php $number = 0; @endphp
                            @foreach($blog_view_4 as $v)
                                <div class="b-ol-list-text__item">
                                    <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b"><a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}">{{$number = $number+1}}</a></div>
                                    <div class="b-ol-list-text__item_info" style="text-align: justify">
                                        <a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}" class="b-ol-list-text__item_info-title f-ol-list-text__item_info-title f-primary-sb" title="{{ $v->blog_title }}">{{ str_limit($v->blog_title, 36, ' ...') }}</a>
                                        <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc" style="margin-top: -15px;">{!! str_limit($v->blog_short_desc, 115, ' ...') !!}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="clearfix">
                            <a href="{{url('blog')}}" class="f-more f-primary-b">and much more...</a>
                        </div>
                    </div>

                    <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
                        <h2 class="f-primary-b" style="text-transform: capitalize">Popular Article Here</h2>
                        <p class="f-section-info__text_short f-primary-sb">These articles have been read a lot of time</p>
                        <div class="b-ol-list-text-container">

                            @php $number = 4; @endphp
                            @foreach($blog_view_8 as $v)
                                <div class="b-ol-list-text__item">
                                    <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b"><a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}">{{$number = $number+1}}</a></div>
                                    <div class="b-ol-list-text__item_info" style="text-align: justify">
                                        <a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}" class="b-ol-list-text__item_info-title f-ol-list-text__item_info-title f-primary-sb" title="{{ $v->blog_title }}">{{ str_limit($v->blog_title, 36, ' ...') }}</a>
                                        <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc" style="margin-top: -15px;">{!! str_limit($v->blog_short_desc, 120, ' ...') !!}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="clearfix">
                            <a href="{{url('blog')}}" class="f-more f-primary-b">and much more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section popular_article-->

    <!--start section-->
    {{--<section class="b-desc-section-container b-diagonal-line-bg-light">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-10 col-md-offset-1">--}}
                    {{--<div class="b-infoblock-with-icon-group row">--}}

                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="b-infoblock-with-icon">--}}
                                {{--<a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate f-l" title="Home Loan">--}}
                                    {{--<i class="fa fa-home"></i>--}}
                                {{--</a>--}}
                                {{--<div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">--}}
                                    {{--<a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb f-l">Home Loan</a>--}}
                                    {{--<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">--}}
                                        {{--<br>Write short something about this topic to display hare into 10 words.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="b-infoblock-with-icon">--}}
                                {{--<a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate f-l">--}}
                                    {{--<i class="fa fa-car"></i>--}}
                                {{--</a>--}}
                                {{--<div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">--}}
                                    {{--<a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb f-l">Car Loan</a>--}}
                                    {{--<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">--}}
                                        {{--<br>Write short something about this topic to display hare into 10 words.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix visible-sm-block"></div>--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="b-infoblock-with-icon">--}}
                                {{--<a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate f-l">--}}
                                    {{--<i class="fa fa-bank"></i>--}}
                                {{--</a>--}}
                                {{--<div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">--}}
                                    {{--<a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb f-l">Saving Account</a>--}}
                                    {{--<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">--}}
                                        {{--<br>Write short something about this topic to display hare into 10 words.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix visible-md-block visible-lg-block"></div>--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="b-infoblock-with-icon">--}}
                                {{--<a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate f-l">--}}
                                    {{--<i class="fa fa-user"></i>--}}
                                {{--</a>--}}
                                {{--<div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">--}}
                                    {{--<a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb f-l">Life Insurance</a>--}}
                                    {{--<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">--}}
                                        {{--<br>Write short something about this topic to display hare into 10 words.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix visible-sm-block"></div>--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="b-infoblock-with-icon">--}}
                                {{--<a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate f-l">--}}
                                    {{--<i class="fa fa-credit-card"></i>--}}
                                {{--</a>--}}
                                {{--<div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">--}}
                                    {{--<a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb f-l">Credit Card</a>--}}
                                    {{--<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">--}}
                                        {{--<br>Write short something about this topic to display hare into 10 words.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="b-infoblock-with-icon">--}}
                                {{--<a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate f-l">--}}
                                    {{--<i class="fa fa-money"></i>--}}
                                {{--</a>--}}
                                {{--<div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">--}}
                                    {{--<a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb f-l">Capital Marketing</a>--}}
                                    {{--<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">--}}
                                        {{--<br>Write short something about this topic to display hare into 10 words.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix visible-sm-block"></div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--end section-->

@endsection